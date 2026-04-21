<?php

namespace App\Http\Controllers;
use App\new_arrival;
use App\na_image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class NewarrivalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     

    public function index()
    {
        $products = new_arrival::all()->sortBy('sequence');
        return view('admin.new_arrival.allproducts',compact("products",$products));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.new_arrival.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $product = new new_arrival;
    $product->name = $request->name;

    // Destination path for both images and PDFs
    $destinationPath = 'images/pdf';

    // Store feature image
    $imgName = date('YmdHis', time()) . mt_rand() . '.png';
    $request->file('image')->move($destinationPath, $imgName);
    $product->image = $imgName;

    // Store the PDF in the same directory
    if ($request->hasFile('pdf')) {
        $pdfFile = $request->file('pdf');
        $pdfOriginalName = $pdfFile->getClientOriginalName(); // Get the original name
        $pdfName = str_slug(pathinfo($pdfOriginalName, PATHINFO_FILENAME)) . '.' . $pdfFile->getClientOriginalExtension();
        $pdfFile->move($destinationPath, $pdfName);
        $product->pdf = $pdfName;  // Store only the filename in the database
    }

    // Hash and store the PDF password
    if ($request->filled('pdf_password')) {
        $product->pdf_password = Hash::make($request->pdf_password);
    }

    $max_order = new_arrival::max('sequence');
    $product->sequence = $max_order ? ++$max_order : 01;

    $product->save();

    return redirect()->route('new_arrival.productss')->with('success', 'Product Created successfully!');
}

  
    public function edit($pid)
    {
        $product = new_arrival::find($pid);
        return view('admin.new_arrival.edit',compact("product"));
    }

    public function update(Request $request, $id)
{
    $product = new_arrival::find($id);
    
    $product->name = $request->name;

    // Destination path for both images and PDFs
    $destinationPath = 'images/pdf';

    // Handle Image Upload
    $file = $request->file('image');
    if($file) {
        $imgName = $file->getClientOriginalName();
        $file->move($destinationPath, $imgName);
        $product->image = $imgName;
    } else {
        $product->image = $request->old_img;
    }

    // Store the PDF in the same directory
    if ($request->hasFile('pdf')) {
        $pdfFile = $request->file('pdf');
        $pdfOriginalName = $pdfFile->getClientOriginalName(); // Get the original name
        $pdfName = str_slug(pathinfo($pdfOriginalName, PATHINFO_FILENAME)) . '.' . $pdfFile->getClientOriginalExtension();
        $pdfFile->move($destinationPath, $pdfName);
        $product->pdf = $pdfName;
    }

    // Handle Password Update
    if ($request->filled('pdf_password')) {
        $product->pdf_password = Hash::make($request->pdf_password);
    }

    $product->save();  // Save the model with updated attributes

    return redirect()->route('new_arrival.productss')->with('success','Products updated successfully!'); 
}


    public function destroy($id)
    {
        $product = new_arrival::find($id);
        $product->delete();
        
        return redirect()->back()->with('success','Products Deleted successfully!'); ; 
    }
    public function destroy_image($id)
    {
        $image = na_image::find($id);
        $image->delete();
    
        return redirect()->back()->with('success','Products Deleted successfully!'); ; 
    }

    public function sort_new_arrival(Request $request){
        $products = $request->data;
        $i = 0;
        foreach ($products as  $id) {
            $product = new_arrival::find($id);
            $product->sequence  = $i;
            $product->update();
            $i++;
        }
    }
    public function sort_new_arrival_images(Request $request){
        $images = $request->data;
        $i = 0;
        foreach ($images as  $id) {
            $image = na_image::find($id);
            $image->sequence  = $i;
            $image->update();
            $i++;
        }
    }

    public function view_images($id){
        $images = na_image::where('new_arrival_id',$id)->get()->sortBy('sequence');;
        return  view('admin.new_arrival.images',compact('images'));       
    }

    public function edit_images($id){
        $image = na_image::where('id',$id)->first();
        return  view('admin.new_arrival.edit_image',compact('image'));       
    }

    public function update_images(Request $request, $id)
    {   
        $image = na_image::find($id);
         
        $image->title = $request->title;
        
       
        $file = $request->file('image');
   
        if(empty($file)){
           $image->image = $request->old_img; 
        }else{
            $destinationPath = 'images/products/new_arrivals/';
            $image->image = $file->getClientOriginalName();
            $file->move($destinationPath,$file->getClientOriginalName());
        }

        $image->update();
        return redirect()->back()->with('success','Image updated successfully!');     
    } 
}
