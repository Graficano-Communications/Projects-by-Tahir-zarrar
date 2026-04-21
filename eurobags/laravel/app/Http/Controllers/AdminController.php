<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\page;
use App\vimeovid;
use PDF; 
use Carbon;

use App\order;
use App\order_item;
use App\review;
use Mail;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_aboutus()
    {
        // $aboutus = page::find(1);

        return view('admin.aboutus');
    }
    public function regenerate_pdf($id){
        $order = order::find($id);
        $order_items  = order_item::where('order_id',$order->id)->get();
        ini_set('max_execution_time', 3000);
         
        $mytime = Carbon\Carbon::now();
		$output = ' <img src="http://cashoponline.com/assets/images/logo.png">
		<h3>Customer Details</h3> 
        <p><strong>Date Time</strong>'.$mytime->toDateTimeString().'</p>
        <p>Order No : '.$order->order_no.'</p>
		<p><strong>Sender Name : </strong>'.$order->name.'</p>
		<p><strong>Email : </strong>'.$order->email.'</p>
		<p><strong>Country : </strong> Pakistan </p>
		<p><strong>City : </strong>'.$order->city.'</p>
		<p><strong>Province : </strong>'.$order->province.'</p>
		<p><strong>Address : </strong>'.$order->address.'</p>
		<p><strong>Phone : </strong>'.$order->phone.'</p>
		<p><strong>Instructions/Message : </strong>'.$order->message.'</p>
		<p><strong>Payment Method : </strong>'.$order->payment_method.'</p>
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
		foreach($order_items as $item)
		{
             
			if($item->options) {$other = json_encode($item->options);}else{$other = 'N/A'; }
			$output .= '
			<tr>
			<td style="border: 1px solid; padding:12px;">'.$item->id.'</td>
            <td style="border: 1px solid; padding:12px;">'.$item->name.'<br><img src="'.$item->image.'" style="height:100px"></td>
        
			<td style="border: 1px solid; padding:12px;">'.$item->color.' '.$other.'</td>
			<td style="border: 1px solid; padding:12px;">'.$item->price.'</td>
			<td style="border: 1px solid; padding:12px;">'.$item->qty.'</td>
			</tr>
			';
		}
		$output .= '</table><br>
		<p><strong>Total Amount : '.$order->total_amount.'</strong><br>
		<strong>Discount : '.$order->discount.'</strong><br><hr>
        <strong>Sub Total : '.$order->sub_total.'</strong><br></p>';
        
       

      

        $pdf = \App::make('dompdf.wrapper');
        
        
        $pdf = $pdf->loadHTML($output);
        // $pdf= $pdf->output();
        // return $pdf->stream();die;
        
        


        $digits = 4;
        $order_no= str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);


        $file_name = $order_no.'.pdf';

		file_put_contents("inquiry_pdf/".$file_name, $pdf->stream());
        
        

		$order->order_pdf = $file_name;
		$order->update();
        
        return redirect(asset('/inquiry_pdf/'.$order->order_pdf));
       

    }
    

    public function reviews(){
      $reviews = review::all();
      return view('admin.reviews',compact('reviews'));
    }

    public function delete($id)
    {
        $review = review::find($id);
        $review->delete();
        return back()->with('success','Review deleted successfully!');
    }

    public function change_status($id){
        $review = review::find($id);
        if($review->status == 0){
            $review->status = 1;
        }else{
            $review->status = 0;
        }
        $review->update();
        return back()->with('success','Review status changed successfully!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_vimeo()
    {
        $vimeo = vimeovid::find(1);
        return view('admin.vimeo',compact("vimeo"));
    }

    public function inquires(){
        $orders = order::orderBy('created_at','DESC')->paginate(25) ;
        return view('admin.inquires',compact('orders'));
    }

    public function inquires_details($id){
        $order = order::find($id);
        $order_items  = order_item::where('order_id',$order->id);

        return view('admin.inquires_details',compact('order','order_items'));
    }

    public function updateinquiry(Request $request, $id)
    {
        $order = order::find($id);

        $order->status = $request->status;
        
        $order->notes = $request->notes;
       

        $order->update();
        return redirect()->route('inquires_details',$id)->with('success','Status updated successfully!');
    }

    public function notify_customer(Request $request, $id){
 
        $order = order::find($id);
        $order->status = "shipped"; 
        $order->tracking_no = $request->tracking_no;
        $order->update();

        $url = "https://lifetimesms.com/plain";
		$message = "Credo : Your Order has been shipped. Now you can track your order with this tracking No: ".$request->tracking_no." by clicking on the link bellows . Thanks. https://www.tcsexpress.com/";

        $parameters = array("api_token" => "e2858ddfae9998bf2be068d6f5959e118e0a1b2991",
                  "api_secret" => "cabrandedsms098765",
                  "to" => $order->phone,
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
        
        $data = array(
			'name' => $order->name,   
			'email' => $order->email,
            'Phone #' => $order->phone,
            'tracking_no' => $request->tracking_no);
            

        $result = Mail::send('notify',[ 'tracking_no' => $data['tracking_no'] ], function($message) use ($data){
            $message->to($data['email'],$data['name'])->subject('Order Shipped');
            $message->from('shop@ca-sports.com.pk','Bags By' );
        });
        

         
        return redirect()->route('inquires_details',$id)->with('success','Email and SMS notifcation send successfully and status changed to shipped.');
    }
    public function notify_cancelled(Request $request, $id){
 
        $order = order::find($id);
        $order->status = "cancelled"; 
        $order->update();

        $url = "https://lifetimesms.com/plain";
		$message = "Bags By Credo : ".$request->message."Thanks.";

        $parameters = array("api_token" => "e2858ddfae9998bf2be068d6f5959e118e0a1b2991",
                  "api_secret" => "cabrandedsms098765",
                  "to" => $order->phone,
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
        
        $data = array(
			'name' => $order->name,   
			'email' => $order->email,
            'Phone #' => $order->phone,
            'Message' => $message);
            

        $result = Mail::send('cancelled_mail',[ 'Message' => $data['Message'] ], function($message) use ($data){
            $message->to($data['email'],$data['name'])->subject('Order Cancelled');
            $message->from('credo@mail.com','Bags By Credo' );
        });
        

         
        return redirect()->route('inquires_details',$id)->with('success','Email and SMS notifcation send successfully and status changed to cancelled.');
    }
    
    public function del_inquiry($id)
    {
        $order = order::find($id);
        $order->delete(); 
        order_item::where('order_id',$order->id)->delete();
        return back()->with('success','Order deleted successfully!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
     return view("admin.dashboard");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $aboutus = page::find($id);
       $aboutus->title = $request->title;
       $aboutus->content = $request->description;
       $aboutus->update();
       return redirect()->route('admin.aboutus')->with('success','About Us updated successfully!');

    }
    public function update_vimeo(Request $request,$id){
      $vimeo = vimeovid::find($id);
       $vimeo->title = $request->title;
       $vimeo->description = $request->description;
       $vimeo->link = $request->link;
       $vimeo->update();
       return redirect()->route('admin.vimeo')->with('success','Vimeo Video updated successfully!');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
