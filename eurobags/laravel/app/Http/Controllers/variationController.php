<?php 

namespace App\Http\Controllers;
use App\product; 
use App\category;
use App\subcategory;
use App\image;
use App\option;
use App\option_value; 
use App\product_variation;
use DB;
use Illuminate\Http\Request;

class variationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function refresh_variation($product_id){   

    $prodid = $product_id;
    $images = image::where('product_id',$prodid)->get()->toArray();

    $option = option::where('product_id',$prodid)->first();
    product_variation::where('product_id',$product_id)->delete();
    if($option){
        
        $option_values = option_value::where('option_id',$option->id)->get()->toArray();
        $count = count($images);
        $count2= count($option_values);
        
        
        for($i=0 ; $i<$count ; $i++){
            for($j = 0 ; $j<$count2 ; $j++){
        
                $product_variation = new product_variation;
                $product_variation->option_id = $option->id;
                $product_variation->color_id = $images[$i]['id'];
                $product_variation->option_value_id = $option_values[$j]['id'];
                $product_variation->product_id= $prodid;
                $product_variation->qty = 5;
                $product_variation->status = 1;
                $product_variation->save();    
            }   
            $product = product::find($product_id);
            $product->status = 1;  
            $product->update();
        }
        }else{  
            
            $count= count($images);
            if($count){
            for($i=0 ; $i< $count ; $i++){
                $product_variation = new product_variation;
                $product_variation->color_id = $images[$i]['id'];
                $product_variation->product_id= $prodid;
                $product_variation->qty = 5;
                $product_variation->status = 1;
                $product_variation->save();
            }
            $product = product::find($product_id);
            $product->status = 1;  
            $product->update();
          }else{
            return redirect()->back()->with('error','NO OPTION OR COLOR FOUND!!');
          }
        }
        
      
        return redirect()->back()->with('success','Variations Refreshed Successfully..!!');
        
        
    }

    public function generate_variation($product_id){
         $variations = product_variation::where('product_id',$product_id)->with(['color','option','option_value'])->get();
         return view('admin.product.variations',compact('variations','product_id'));
    }
    public function update_variations(Request $request ){
        $var_id = $request->var_id;
        $count = count($var_id);
        $qty = $request->qty;

        for($i=0; $i < $count ; $i++){
            $variation = product_variation::find($var_id[$i]);
            $variation->qty = $qty[$i];
            if($qty[$i] <= 0){
                $variation->status = 0;
            }else{
                $variation->status = 1;
            }
            $variation->update();
        }
        return redirect()->back()->with('success','Variation Quanity Updated Successfully..!!');
    }

    // for all
//     $products = product::all();
           
//     foreach($products as $product){
//     $prodid = $product->id;
//     $images = image::where('product_id',$prodid)->get()->toArray();

//     $option = option::where('product_id',$prodid)->first();
//     if($option){
//         // dd("if mai hu");die;
//         $option_values = option_value::where('option_id',$option->id)->get()->toArray();
//         $count = count($images);
//         $count2= count($option_values);
      
//         for($i=0 ; $i<$count ; $i++){
//             for($j = 0 ; $j<$count2 ; $j++){
//             $product_variation = new product_variation;
//             $product_variation->option_id = $option->id;
//             $product_variation->color_id = $images[$i]['id'];
//             $product_variation->option_value_id = $option_values[$j]['id'];
//             $product_variation->product_id= $prodid;
//             $product_variation->qty = 5;
//             $product_variation->save();
//            }     
//         }

//         }else{
            
//             $count= count($images);
//             for($i=0 ; $i< $count ; $i++){
                
//                 $product_variation = new product_variation;
//                 $product_variation->color_id = $images[$i]['id'];
//                 $product_variation->product_id= $prodid;
//                 $product_variation->qty = 5;
//                 $product_variation->save();
                
//             }
//     }
// }
}
