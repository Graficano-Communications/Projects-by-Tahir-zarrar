<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\subcategory;

class CategoryController extends Controller
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
         $categories = category::all()->sortBy('sequence');
        return view('admin.category.categories',compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $category = new category;

        $category->name = $request->name;
        // Get feature image
        $max_order = category::max('sequence');
        if($max_order){$category->sequence = ++$max_order;}
        else{$category->sequence = 01;}

        $name = preg_replace('/[^A-Za-z0-9\-]/', ' ', $request->name);
        if (strlen(trim($name)) > 0){
            $category->slug = str_replace(' ','-',strtolower($name));
        }else{
            $category->slug  = strtolower($name);
        }


        $file = $request->file('image');
        if(!empty($banner_file)){
            $destinationPath = 'images/category/';
            $name = date('YmdHis',time()).mt_rand().'.png';
            $category->image = $name;
            $file->move($destinationPath,$name);
        }

        $banner_image = $request->file('banner_image');
        if(!empty($banner_image)){
            $bannerdestinationPath = 'images/category/banner_image/';
            $banner_name = date('YmdHis',time()).mt_rand().'.png';
            $category->banner_image = $banner_name;
            $banner_image->move($bannerdestinationPath,$banner_name);

        }

    
        $category->save();
          
        return redirect()->route('categories.index')->with('success','Category created successfully!');
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
        $category = category::where('id', $id)->first();
        return view('admin.category.edit',compact("category"));
    }

    
    
    public function sub_category($id)
    {
        $data = category::find($id)->subcategory;
        return $data;
    }
   
    
    public function sub_sub_category($id)
    {
        $data = subcategory::find($id)->subsubcategory;
        return $data;
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
        $category = category::find($id);
        
        $category->name = $request->name;
        $category->slug = $request->slug;

        $file = $request->file('image');

        if(empty($file)){
           $category->image = $request->old_img; 
        }else{

            $destinationPath = 'images/category/';
            $name = date('YmdHis',time()).mt_rand().'.png';
            $category->image = $name;
            $file->move($destinationPath,$name);
        }
         
        $banner_file = $request->file('banner_image');
        if(empty($banner_file)){
            $category->banner_image = $request->old_banner_img;
        }else{
            $banner_image = $request->file('banner_image');
            $bannerdestinationPath = 'images/category/banner_image/';
            $banner_name = date('YmdHis',time()).mt_rand().'.png';
            $category->banner_image = $banner_name;
            $banner_image->move($bannerdestinationPath,$banner_name);
        } 
        


        $category->update();

        
    

        return redirect()->route('categories.index')->with('success','Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        subcategory::where('category_id',$id)->delete();
        $category = category::find($id);
        $category->delete();
        
        return back()->with('success','Item deleted successfully!');
    }
    
    public function sort_category(Request $request){
        // return $request;
        $categories = $request->data;
        $i = 0;
        foreach ($categories as  $id) {
            $category = category::find($id);
            $category->sequence  = $i;
            $category->update();
            $i++;
        }


    }
   
    
}
