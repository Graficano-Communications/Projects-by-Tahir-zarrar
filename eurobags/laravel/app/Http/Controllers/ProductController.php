<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product; 
use App\category;
use App\subcategory;
use App\sub_subcategory;
use App\image;
use App\option;
use App\option_value;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function index()
    {
         $products = product::paginate(25);
         $categories = category::all()->sortBy('sequence');
        return view("admin.product.products",compact("products","categories"));
    }
    public function product_by_subcategory($id){
        $categories = category::all()->sortBy('sequence');
        $category = subcategory::find($id);
        $name = subcategory::find($id);
        $products = product::where('sub_category_id',$id)->get()->sortBy('sequence');
        
       
        return view("admin.product.category_product",compact("products","categories","name"));
    }
    
    public function product_by_sub_subcategory($id){
        $categories = category::all()->sortBy('sequence');
        $products = product::where('sub_subcategory_id',$id)->get()->sortBy('sequence');
        $name = sub_subcategory::find($id);
       return view("admin.product.category_product",compact("products","categories","name"));
    }
     
    public function check_product_url($url)
    {
        $product = product::where('slug',$url)->first();
        if ($product) {   return "true"; }
        else { return "false"; }
    } 
    public function check_product_code($code)
    {
        $product = product::where('code',$code)->first();
        if ($product) {   return "true"; }
        else { return "false"; }
    } 

    public function create()
    {
        return view('admin.product.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|unique:products|max:255',
        ]);
        
        $product = new product;
        $product->slug = $request->slug;
        $product->video = $request->video;
        $product->shipping_charges = $request->shipping_charges;


        if($request->has('feature')){
            $product->favourite = 1;
        }else{
            $product->favourite = 0;
        }
        if($request->has('track_stock')){
            $product->track_stock = 1;
        }else{
            $product->track_stock = 0;
        }
        if($request->has('taxable')){
            $product->taxable = 1;
        }else{
            $product->taxable = 0;
        }
        if($request->has('favourite')){
            $product->favourite = 1;
        }else{
            $product->favourite = 0;
        }
        if($request->has('new_arrival')){
            $product->new_arrival = 1;
        }else{
            $product->new_arrival = 0;
        }
        $product->status = 0;
        $product->name = $request->name;
        $product->code = $request->code;

        $product->price = $request->price;

        if($request->sale_price){
            $product->sale_price = $request->sale_price;
        }else{
            $product->sale_price = "0.0";
        }

        

        $product->qty = $request->qty;
      

        $size_chart = $request->file('size_chart');
        if(!empty($size_chart)){
            $bannerdestinationPath = 'images/products/size_charts/';
            $size_chart_name = date('YmdHis',time()).mt_rand().'.png';
            $product->size_chart = $size_chart_name;
            $size_chart->move($bannerdestinationPath,$size_chart_name);

        }
        
       
        if($request->description){
            $product->description = $request->description;
        }else{
            $product->description = "N/A";
        }
        if($request->features){
            $product->features = $request->features;
        }else{
            $product->features = "N/A";
        }
        if($request->terms_conditions){
            $product->terms_conditions = $request->terms_conditions;
        }else{
            $product->terms_conditions = "N/A";
        }
        
        
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        
        $max_order = product::max('sequence');
        if($max_order){$product->sequence = ++$max_order;}
        else{$product->sequence = 01;}
      
           
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description; 

        $product->save();
        $product_id =$product->id;
        if(!empty($request->optionnames)){

            $name= $request->optionname;
            $options= $request->options;
     
            $opt = new option;
            $opt->name = $name;
            $opt->product_id = $product_id;
            $max = option::max('sequence');
            if($max){$opt->sequence = ++$max;}
            else{$opt->sequence = 01;}
            $opt->save();

            $opts = explode(',',$options);
            foreach($opts as $op){
                $opt_val = new option_value;
                $opt_val->name = $op;
                $opt_val->value = $op;
                $opt_val->option_id = $opt->id;
                $max_o = option_value::max('sequence');
                if($max_o){$opt_val->sequence = ++$max_o;}
                else{$opt_val->sequence = 01;}
                $opt_val->Save();
               }         
            }
           
        return redirect()->route('products_images',$product->id)->with('success','Products Created successfully!');
    }
    public function add_img(Request $request)
    { 
      $color = $request->color;
      $code = $request->code;
      $images = $request->images;
      $product_id = $request->product_id;

      $image = new image;
      $image->color = $color;
      $image->code = $code;

      $max_order = image::where('product_id',$request->product_id)->max('sequence');
      

      if($max_order){$image->sequence = ++$max_order;}
      else{$image->sequence = 01;}


    
      foreach($images as $key => $img)
      { 
        $ext = $img->getClientOriginalExtension(); 
      
        $name = date('YmdHis',time()).mt_rand().".".$ext;        
        $destinationPathorgin = 'images/products/';
        $img->move($destinationPathorgin,$name);  
        $names[] = $name;
       } 

        $image->images =json_encode($names);
        $image->product_id = $product_id;
        $image->save();
       return redirect()->route('products_images',$product_id)->with('success','Images Added successfully!');;
    }


    

    public function edit($id) 
    {
        $product = product::where('id', $id)->first();
        return view('admin.product.edit',compact("product"));
    }

    public function update(Request $request, $id)
    {
        
        $product = product::find($id);
        $product->slug = $request->slug;
        $product->video = $request->video;
        $product->shipping_charges = $request->shipping_charges;

        if($request->has('feature')){
            $product->favourite = 1;
        }else{
            $product->favourite = 0;
        }
        if($request->has('track_stock')){
            $product->track_stock = 1;
        }else{
            $product->track_stock = 0;
        }
        if($request->has('taxable')){
            $product->taxable = 1;
        }else{
            $product->taxable = 0;
        }
        if($request->has('favourite')){
            $product->favourite = 1;
        }else{
            $product->favourite = 0;
        }
        if($request->has('new_arrival')){
            $product->new_arrival = 1;
        }else{
            $product->new_arrival = 0;
        }
        if($request->has('status')){
            $product->status = 1;
        }else{
            $product->feature = 0;
            $product->status = 0;
            $product->favourite = 0;
            $product->new_arrival = 0;

        }
        $product->name = $request->name;
        $product->code = $request->code;

        $product->price = $request->price;

        if($request->sale_price){
            $product->sale_price = $request->sale_price;
        }else{
            $product->sale_price = "0.0";
        }

        

        $product->qty = $request->qty;

        $size_chart = $request->file('size_chart');
        if(empty($size_chart)){
            $product->size_chart = $request->old_size_chart;
        }
        else{
            $bannerdestinationPath = 'images/products/size_charts/';
            $size_chart_name = date('YmdHis',time()).mt_rand().'.png';
            $product->size_chart = $size_chart_name;
            $size_chart->move($bannerdestinationPath,$size_chart_name);

        }
     
        
       
        if($request->description){
            $product->description = $request->description;
        }else{
            $product->description = "N/A";
        }
        if($request->features){
            $product->features = $request->features;
        }else{
            $product->features = "N/A";
        }
        if($request->terms_conditions){
            $product->terms_conditions = $request->terms_conditions;
        }else{
            $product->terms_conditions = "N/A";
        }
        
       
        
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
      
        
         
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description; 

        $product->update();
        $product_id = $product->id;
        
         
        return redirect()->route('products.index')->with('success','Products updated successfully!');
    }
   
   
    public function destroy($id)
    {
        $product = product::find($id);
        $product->delete();
        return back()->with('success','Item deleted successfully!');
    }

    public function sort_products(Request $request){
        $products = $request->data;
        $i = 0;
        foreach ($products as  $id) {
            $product = product::find($id);
            $product->sequence  = $i;
            $product->update();
            $i++;
        }
    }
    public function sort_img(Request $request){
        $imgs = $request->data;
        $i = 1;
        foreach ($imgs as  $id) {
            $img = image::find($id);
            $img->sequence  = $i;
            $img->update();
            $i++;
        }
    }


    public function importexport(){
        $subcats = subcategory::all();
        return view('admin.product.importexport',compact('subcats'));
    }


    public function producttocopy($id){
     $data = product::where('subcategory_id',$id)->get();
     return $data;
    }

    public function images($id){
        $imgs = product::find($id)->images->sortBy('sequence');
        $product = product::find($id);
        return view("admin.product.imgs",compact("imgs","product"));

    }


    public function editimg($id){
       $img = image::find($id);
       return view('admin.product.editimg',compact("img"));
         
    }


    public function deleteimg($image,$id){
         $color=image::find($id);
         $imgs = json_decode($color->images); 
        
         if (($key = array_search($image ,$imgs)) !== false) {
            unset($imgs[$key]);
          }
          
         $color->images=json_encode(array_values($imgs));
         $color->save();

        

         return redirect()->back();
    }

    
     public function updateimg(Request $request, $id){
     
        $image = image::find($id);
        $color = $request->color;
        $code = $request->code;
        $images = $request->images;
        $product_id = $request->product_id;

         $image->color = $color;
         $image->code = $code;
      if($images){
      foreach($images as $key => $img)
      { 
        $ext = $img->getClientOriginalExtension(); 
      
        $name = date('YmdHis',time()).mt_rand()."." .$ext;        
        $destinationPathorgin = 'images/products/';
        $img->move($destinationPathorgin,$name);  
        $names[] = $name;
      }
    
     
      $image->images = json_encode(array_merge(json_decode($image->images),$names)); 
     
      }
    $image->product_id = $product_id;
 
        $image->update();
        return redirect()->route('products_images',$image->product_id)->with('success','Image updated successfully!');   
    }

    public function delimg($id,$pid){
        $img = image::find($id);
        $img->delete();
        $images = image::where('product_id',$pid)->get();  
        $i = 1;
       foreach ($images as  $imag) {
           $img = image::find($imag->id);
           $img->sequence  = $i;
           $img->update();
           $i++;
       }
        return redirect()->route('products_images',$pid)->with('success','Image deleted successfully!');

    }

     public function admin_search(Request $request){
        $products = product::where('code','LIKE','%'.$request->search_value.'%')->orWhere('id','LIKE','%'.$request->search_value.'%')->orWhere('name','LIKE','%'.$request->search_value.'%')->paginate(25);
        $categories = category::all()->sortBy('sequence');
        return view("admin.product.products",compact("products","categories"));
    }

    public function products_options($id){
        $options = option::with('values')->where('product_id',$id)->get();
        $product = product::find($id);

        return view("admin.product.options",compact("options","product"));

    }
    public function change_opt($id){
        $option = option_value::find($id);
        if($option->status == 1){
            $option->status = 0;
        }else{
            $option->status = 1;
        }
        $option->save();
        return redirect()->back();

    }
    public function change_color($id){
        $color = image::find($id);
        if($color->status == 1){
            $color->status = 0;
            $count_color = image::where('product_id',$color->product_id)->get()->count();
            if($count_color == 1){
              $product = product::find($color->product_id);
              $product->feature = 0;
              $product->favourite = 0;
              $product->new_arrival = 0;
              $product->status = 0;
              $product->update();
            }
        }else{
            $color->status = 1;
        }
        $color->save();
        return redirect()->back();
    }

    public function editopt($id){
        $option = option::where('id',$id)->first();
        $values = option_value::where('option_id',$option->id)->get()->pluck('name')->toArray();
        $values = implode (", ", $values);
        return view("admin.product.edit_option",compact("option","values"));
    }
    public function add_opt(Request $request){

        if($request->optionname){

            $name= $request->optionname;
            $option= $request->options;
    
          
            $opt = new option;
            $opt->name = $name;
            $opt->product_id = $request->product_id;
            $max = option::max('sequence');
            if($max){$opt->sequence = ++$max;}
            else{$opt->sequence = 01;}
            $opt->save();

            $opts = explode(',',$option);
            foreach($opts as $op){
                $opt_val = new option_value;
                $opt_val->name = $op;
                $opt_val->value = $op;
                $opt_val->option_id = $opt->id;
                $max_o = option_value::max('sequence');
                if($max_o){$opt_val->sequence = ++$max_o;}
                else{$opt_val->sequence = 01;}
                $opt_val->Save();
               } 
      
            }
            return redirect()->route('products_options',$request->product_id);
    }

    public function updateopt(Request $request ,$id ){
          $option = option::where('id',$id)->first();
          $option->name = $request->optionnames;
          $option->save();

           $op =$request->options;
           $opt = explode(', ',$op);
 
            for( $i=0; $i < count($opt) ; $i++){
               $check_if_exist = option_value::where('option_id',$id)->where('name',$opt[$i])->first();
               if(empty($check_if_exist)){
                $opt_val = new option_value;
                $opt_val->name = $opt[$i];
                $opt_val->value = $opt[$i];
                $opt_val->option_id = $option->id;
                $max_o = option_value::max('sequence');
                    if($max_o){$opt_val->sequence = ++$max_o;}
                    else{$opt_val->sequence = 01;}
                $opt_val->Save();
               } 
            } 
           return redirect()->route('products_options',$option->product_id);
                    
    }
    public function delopt($id){
        option::find($id)->delete();  
        option_value::where('option_id',$id)->delete();
        return redirect()->back();
    }


}
