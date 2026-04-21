<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\brand;
use App\brand_img;


class BrandController extends Controller
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
    public function index()
    {
        $brands = brand::all()->sortBy('sequence');


        return view("admin.brand.brands",compact("brands"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);die;
        $brand = new brand;

        $brand->name = $request->name;

        $name = preg_replace('/[^A-Za-z0-9\-]/', ' ', $request->name);
        if (strlen(trim($name)) > 0){
            $brand->slug = str_replace(' ','-',strtolower($name));
        }else{
            $brand->slug  = strtolower($name);
        }

        
        $brand->profile = $request->profile;
        $brand->bio = $request->bio;
        $brand->honours = $request->honours;

        
        $brand->age = $request->age;
        $brand->matches = $request->matches;
        $brand->runs = $request->runs;
        
        $brand->meta_title = $request->meta_title;
        $brand->meta_description = $request->meta_description;

        $max_order = brand::max('sequence');
        if($max_order){$brand->sequence = ++$max_order;}
        else{$brand->sequence = 01;}

        // Get feature image
        $file = $request->file('image');
        $destinationPath = 'images/brands/';
        $extension = $file->getClientOriginalExtension();
        $display_name= date('YmdHis',time()).mt_rand().$extension;
        $brand->display_image = $display_name;
        $file->move($destinationPath,$display_name);
        
        $brand->save();
        $brand_id = $brand->id;
        $images= $request->images;
        foreach($images as $image){
            $img = new brand_img();
            $name = date('YmdHis',time()).mt_rand().'.jpg';
                
            $destinationPathorgin = 'images/brands/';
            // $img = $image->file($key);
            $img->image =$name;
            $image->move($destinationPathorgin,$name);
            $img->brand_id = $brand_id;
            $img->save();
        }

        
        return redirect()->route('brands.index')->with('success','Brand created successfully!');;
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
        $brand = brand::where('id', $id)->first();
        $images = brand_img::where('brand_id',$id)->get();
        return view('admin.brand.edit', compact("brand","images"));
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

        $brand = brand::find($id);
       
        $brand->name = $request->name;
        $brand->slug = $request->slug;
        $brand->profile = $request->profile;
        $brand->bio = $request->bio;
        $brand->honours = $request->honours;

        
        $brand->age = $request->age;
        $brand->matches = $request->matches;
        $brand->runs = $request->runs;

        $max_order = brand::max('sequence');
        if($max_order){$brand->sequence = ++$max_order;}
        else{$brand->sequence = 01;}
        

        // Get feature image
        $file = $request->file('image');
        if(empty($file)){ 
           $brand->display_image = $request->old_img; 
        }else{
            $destinationPath = 'images/brands/';
            
            $extension = $file->getClientOriginalExtension();
            $display_name= date('YmdHis',time()).mt_rand().$extension;
            $brand->display_image = $display_name;
            $file->move($destinationPath,$display_name);
        }
    
        $brand->update();

        $brand_id = $brand->id;
        $images= $request->images;
        if($images){
            foreach($images as $image)
                {
                    $img = new brand_img();
                    $name = date('YmdHis',time()).mt_rand().'.jpg';
                
                    $destinationPathorgin = 'images/brands/';
                    $img->image =$name;
                    $image->move($destinationPathorgin,$name);
                    $img->brand_id = $brand_id;
                    $img->save();
                }
            }
       

        return redirect()->route('brands.index')->with('success','Brand updated successfully!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barnd = brand::find($id);
        $barnd->delete(); 
        brand_img::where('brand_id',$id)->delete();
        return back()->with('success','Item deleted successfully!');
    }

    public function del_band_img($id){
        $img = brand_img::find($id);
        $brand_id = $img->brand_id;
        $img->delete();
        return redirect()->route('brands.edit',$brand_id)->with('success','Item deleted successfully!');
    }
    public function sort_brand(Request $request){
        // return $request;
        $barnds = $request->data;
        $i = 0;
        foreach ($barnds as  $id) {
            $barnd = brand::find($id);
            $barnd->sequence  = $i;
            $barnd->update();
            $i++;
        }
    }
}
