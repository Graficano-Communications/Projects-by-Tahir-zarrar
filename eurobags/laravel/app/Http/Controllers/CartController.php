<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use PDF; 
use Carbon;
use App\order;
use App\order_item;
use App\image;
use App\option;
use App\option_value;
use Mail;
use App\product;
use App\product_variation;
 
class CartController extends Controller
{
	public function add_to_cart(Request $request){
	$data = $request->data;
	if(array_key_exists(6, $data)){
		Cart::add($data[0],  $data[1] , $data[2] , $data[3], ['color' => $data[4] , 'image' => $data[5] ,'other_options'=> $data[6]]); 
	}else{
		Cart::add($data[0],  $data[1] , $data[2] , $data[3], ['color' => $data[4] , 'image' => $data[5] ]); 
	}
	 
	  $data = Cart::content();
	  $total = ["total" => Cart::subtotal()]; 
	  $ret['data'] = $data;
	  $ret['total'] = $total;
	return $data;


	}
   
	

	public function get_cart_data(){
		$data = Cart::content();  
		$total = ["total" => Cart::subtotal()]; 
		$ret['data'] = $data;
		$ret['total'] = $total; 
		return $data;
	}
	public function inquiry(){
		$data = Cart::content();
		if( count($data) == 0)  {
			return redirect()->route('cart')->with('error' , 'Your cart is empty please add something in your cart to checkout');
		}else{
			$qty = 0;
		foreach($data as $key => $prod){
			
			if($data->first){
				$product = product::where('id' ,$prod->id)->first();
				$shipping_charges = $product->shipping_charges; 	
			}
			$qty = $qty + $prod->qty; 
		}
	
		$shipping_charges = $shipping_charges + (50* ($qty -1));
		if((int) str_replace(',', '',Cart::subtotal()) >= 5000){
			$shipping_charges = 0;
		}
		
		return view('inquiry', compact('shipping_charges'));
		}
		
	} 
	public function cart(){
		return view('cart');
	}
	public function removecart($rowid){
		Cart::remove($rowid);
		return redirect()->route('cart')->with('message', 'Cart Item Removed'); 
	}
	public function checkout(Request $request){
    
		$products = Cart::content();
		$sender_name = $request->name;
		$email = $request->email;
		$address = $request->address;
		$phone = $request->phone;
		$city = $request->city;
		$province = $request->province;
		$postal_code = $request->postal_code;
		$msg = $request->message;
		$shipping_charges = $request->shipping_charges;
		if($request->discount_amount){
			$discount = $request->discount ;
			$res_amount = $request->discount_amount;
		}else{
			$discount = 0.0;
			$res_amount = $request->res_amount;
		}
		 
        
		$mytime = Carbon\Carbon::now();
        

		$output = '
		<div style="display:flex;">
		<div style="width:50%;float:left">
		<img src="http://bagsbycredo.com/beta/assets/images/red-logo.png">
		<h1>BAGS BY CREDO</h1>
		<h3>Customer Details</h3> 
		<p><strong>Date Time: </strong>'.$mytime->toDateTimeString().'</p>
		<p><strong>Sender Name : </strong>'.$sender_name.'</p>
		<p><strong>Email : </strong>'.$email.'</p>
		</div>
		<div style="width:50%;float:right">
		<p><strong>Country : </strong> Pakistan </p>
		<p><strong>City : </strong>'.$city.'</p>
		<p><strong>Province : </strong>'.$province.'</p>
		<p><strong>Address : </strong>'.$address.'</p>
		<p><strong>Phone : </strong>'.$phone.'</p>
		<p><strong>Instructions/Message : </strong>'.$msg.'</p>
		<p><strong>Payment Method : </strong>'.$request->payment_method.'</p>
		</div>	
		</div>
		<div style="padding-top:250px">
		<hr>
		<h3 >Product Details</h3>
		<table width="100%" style="border-collapse: collapse; border: 0px;">
		<tr>
		<th style="border: 1px solid; padding:12px;" width="20%">Id</th>
		<th style="border: 1px solid; padding:12px;" width="30%">Name</th>
		<th style="border: 1px solid; padding:12px;" width="15%">Color</th>
		<th style="border: 1px solid; padding:12px;" width="15%">Price</th>
		<th style="border: 1px solid; padding:12px;" width="15%">Qty</th>
		</tr> 
		';  
		foreach($products as $product)
		{
			if($product->options->other_options) {$other = json_encode($product->options->other_options);}else{$other = 'N/A'; }

			if($product->options->discount){ 
				$output .= '
				<tr>
				<td style="border: 1px solid; padding:12px;">'.$product->id.'</td>
				<td style="border: 1px solid; padding:12px;">'.$product->name.'<br><img src="'.$product->options->image.'" style="height:100px"></td>
				<td style="border: 1px solid; padding:12px;">'.$product->options->color.' '.$other.'</td>
				<td style="border: 1px solid; padding:12px;">Rs.'.$product->price.' <del>Rs. '.$product->options->orginal_price.'</del></td>
				<td style="border: 1px solid; padding:12px;">'.$product->qty.'</td>
				</tr>
				';
			}else{
                $output .= '
			<tr>
			<td style="border: 1px solid; padding:12px;">'.$product->id.'</td>
			<td style="border: 1px solid; padding:12px;">'.$product->name.'<br><img src="'.$product->options->image.'" style="height:100px"></td>
			<td style="border: 1px solid; padding:12px;">'.$product->options->color.' '.$other.'</td>
			<td style="border: 1px solid; padding:12px;">Rs. '.$product->price.'</td>
			<td style="border: 1px solid; padding:12px;">'.$product->qty.'</td>
			</tr>
			';
			}
			
		}
		
		$output .= '</table><br>
		<p style="text-align:left"><strong>Total Amount : '.$request->total_amount.'</strong><br>
		<strong>Discount : '.$discount.'</strong><br>
		<strong>Shipping Charges : '.$shipping_charges.'</strong><br><hr>
		
		<strong>Sub Total : '.$request->res_amount .'</strong><br></p></div>';
	   
		
    
		$pdf = \App::make('dompdf.wrapper');
		$pdf = $pdf->loadHTML($output);
   
       
		$data = array(
			'name' => $sender_name,   
			'email' => $email,
			'Phone #' => $phone,
			'pdf' => $pdf);
        
        
        $digits = 4;
        $order_no= str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
      
		file_put_contents("checkout.pdf", $pdf->output());

		$order = new order;
		$order->order_no = $order_no;
		$order->name = $sender_name;
		$order->email = $email;
		$order->country = "Pakistan";
		$order->city = $city;
		$order->province = $province;
		$order->address = $address;
		$order->shipping_charges = $shipping_charges;
	
		if($postal_code){
			$order->postal_code = $postal_code;
		}else{
			$order->postal_code = 'N/A';
		}

		$order->phone = $phone;
		if($msg){
			$order->notes = $msg;
		}else{
			$order->notes = 'N/A';
		}
		
		$order->total_amount = $request->total_amount;
		
		
	
        $order->discount = $discount;
        if($request->discount_amount){
			$order->sub_total = $request->discount_amount;
		}else{
			$order->sub_total = $request->res_amount;
		}
	

		$order->status = "pending";
		$order->order_pdf = "empty" ;
		$order->payment_method 	 = $request->payment_method;
        $order->total_items = Cart::count();
		$digts = 5;
        $code= str_pad(rand(0, pow(10, $digts)-1), $digts, '0', STR_PAD_LEFT);
		
		$order->code  = $code;
		
		$order->save();
		$id = $order->id;
		foreach($products as $prod)
		{
		    $order_item = new order_item;
			$order_item->product_id = $prod->id;
		
			$order_item->name = $prod->name;
			
		    $order_item->qty = $prod->qty;
			$order_item->color = $prod->options->color;
			if($prod->options->discount){
				$order_item->discount = $prod->options->discount;
				$order_item->price = $prod->options->orginal_price;
				$order_item->discount_price = $prod->price;

			}else{
				$order_item->price = $prod->price;
			}
			
 
			$get_color = image::where('product_id',$prod->id)->where('color',$prod->options->color)->first();
			$get_image = product_variation::where('product_id',$prod->id)->where('color_id',$get_color->id)->first();
			$get_qty = $get_image->qty - $prod->qty;
			if($get_qty <= 0){ 
				$get_image->status = 0;
			}
			$get_image->qty = $get_qty;
			$get_image->update();

			$order_item->image = $prod->options->image;

			if($prod->options->other_options != null){
				$order_item->options =json_encode($prod->options->other_options);

				foreach($prod->options->other_options as $key => $optn){
					
					$option_name = option::where('product_id',$prod->id)->where('name',$key)->first();
					$opt_id = option_value::where('option_id',$option_name->id)->where('name','like', '%' . $optn . '%')->first();
					$get_opt_value = product_variation::where('product_id',$prod->id)->where('option_value_id',$opt_id->id)->first();

					$get_opt_qty = $get_opt_value->qty - $prod->qty;
			        if($get_opt_qty <= 0){ $get_opt_value->status = 0;}
					$get_opt_value->qty=  $get_opt_qty;
					$get_opt_value->update();
				}
			}
			
		    $order_item->order_id = $order->id;
		    $order_item->save();
		}
		 
		
		$this->sendotp($phone , $code);
        ini_set('max_execution_time', 3000);
        $file_name = $order->id.'.pdf'; 

		file_put_contents("inquiry_pdf/".$file_name, $pdf->stream());

		$update_order = order::find($order->id);
		$update_order->order_pdf = $file_name;
		$update_order->update();

		$data = array(
			'name' => $sender_name,   
			'email' => $email,
			'Phone #' => $phone,
			'pdf' => $pdf);
		  $result = Mail::send('mailtocredo', $data, function($message) use ($data){


			$message->to('info@bagsbycredo.com','Bags By Credo')->subject('Product Invoice');
	
			$message->from($data['email'],$data['name']);
	
			
	
		  $message->attach("checkout.pdf");
		});
		



		Cart::destroy();
		return redirect()->route('verifyorder', ['id' => $id , 'phone'=> $phone] );
	}

	public function verifyorder($id , $phone){
	
        return view('verify', compact('phone','id'));
	}

   public function sendotpagain($phone , $id){
	    $digts = 5;
        $code= str_pad(rand(0, pow(10, $digts)-1), $digts, '0', STR_PAD_LEFT);
		
		$update_order = order::find($id);
		$update_order->code = $code;
		$update_order->update();

		$this->sendotp($phone , $code);
		return view('verify', compact('phone','id'));

   }

	public function sendotp($phone , $code){

		$url = "https://lifetimesms.com/plain";
		$message = "Bags By Credo : Please Enter you 5 digit code to confirm your order. Code: ".$code." Thanks";

        $parameters = array("api_token" => "5becfe1769222116ad5c7b98480d666add08ea4746",
                  "api_secret" => "bagsbycredo0987",
                  "to" => $phone,
                  "from" => "Bags By Credo",
                  "message" => $message,
				);
		$ch = curl_init();
        $timeout  =  30;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        $response = curl_exec($ch);
		curl_close($ch);
		echo $response ;
	}


	public function verifyotp(Request $request){
		 Cart::destroy();
		$code = $request->first;
        
		$order = order::where('id',$request->id)->where('code',$code)->first();
		
		if(order::where('id',$request->id)->where('code',$code)->first()){
			$msg = "Your order is verified!";
			return view('ordersuccess' , compact('msg','amount_msg'));
		}else{
            return redirect()->back()->with('error', 'You have entered wrong code , Please try again!');
		}	
	
	}
	public function order_place($id){
			$order_items = order_item::where('order_id',$id)->get();
			$order = order::find($id);
			$amount = (float) str_replace(',', '',$order->total_amount);
			
			$data = ["order" => $order , "items" => $order_items];
			$result = Mail::send('mail', [ 'order' => $order , "items" => $order_items], function($message)  use ($order){
			$message->to($order->email,$order->name)->subject('Order Confirmation');
			$message->from('info@bagsbycredo.com','Bags By Credo');
			});
			Cart::destroy();
			$msg = "Your order has been received yet in a pending status our customer representative will contact you shortly";
			return view('ordersuccess', compact('msg'));
		
	}
}
