<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\subcategory;

class subcategoryController extends Controller
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
        $subcategories = subcategory::with('category')->get()->sortBy('sequence');
        return view('admin.subcategory.categories',compact("subcategories"));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new subcategory;

        $category->name = $request->name;
        $category->category_id = $request->category_id;

        // Get feature image
        $max_order = subcategory::max('sequence');
        if($max_order){$category->sequence = ++$max_order;}
        else{$category->sequence = 01;}

        $name = preg_replace('/[^A-Za-z0-9\-]/', ' ', $request->name);
        if (strlen(trim($name)) > 0){
            $category->slug = str_replace(' ','-',strtolower($name));
        }else{
            $category->slug  = strtolower($name);
        }

        $banner_image = $request->file('banner_image');
        if(!empty($banner_image)){
            $bannerdestinationPath = 'images/category/banner_image/';
            $banner_name = date('YmdHis',time()).mt_rand().'.png';
            $category->banner_image = $banner_name;
            $banner_image->move($bannerdestinationPath,$banner_name);

        }
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
    
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
      $subcategories = subcategory::with('category')->where('category_id',$id)->get()->sortBy('sequence');
      return view('admin.subcategory.categories',compact("subcategories"));
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = subcategory::where('id', $id)->first();
        return view('admin.subcategory.edit',compact("category"));
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
        $category = subcategory::find($id);
        
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->category_id = $request->category_id;

         
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
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
    


        $category->update();

        
    

        return redirect()->route('subcategories.index')->with('success','Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        subcategory::where('id',$id)->delete();
        
        return back()->with('success','Item deleted successfully!');
    }
    public function sort_subcategory(Request $request){
        // return $request;
        $subcategories = $request->data;
        $i = 0;
        foreach ($subcategories as  $id) {
            $subcategory = subcategory::find($id);
            $subcategory->sequence  = $i;
            $subcategory->update();
            $i++;
        }


    }
}
