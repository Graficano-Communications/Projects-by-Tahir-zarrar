<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\subcategory;
use App\Product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
      * @return \Illuminate\Http\Response
     */
     public function __construct()
    { 
        // $this->middleware('auth');
    }
    public function index()
    {
        $category = Category::all()->sortBy('sequence');;
        $subcategory = subcategory::all()->sortBy('sequence');
        return view('admin.categories.allcats',compact("category","subcategory",$category,$subcategory));
    }

    public function sub_category($id)
    {
        $data = Category::find($id)->subcategory;
        return $data;
    }
    
    public function view_subcat($id){
    $subcategory = subcategory::where('category_id', $id)->get()->sortBy('sequence');
    return view('admin.categories.subcats', compact("subcategory", "id"));
}






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.new');
    }
    
    
    public function add_subcategory($id){
        
        //dd($id);
        return view('admin.categories.new_subcat',compact("id"));
     }
    
    public function addsubcat($id){
        return view('admin.categories.new_subcat',compact("id"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
  public function store_subcat(Request $request)
{
    // Uncomment the line below to dump and die (dd) the request data
    // dd($request->all());

    $names = $request->names;
    $description = strip_tags($request->description); 

    $images = $request->images;
    $icons = $request->icons;
    $category_id = $request->catid;

    $count = count($names);
    for ($i = 0; $i < $count; $i++) {
        $subcategory = new subcategory;
        $subcategory->name = $names[$i];

        $max_order = subcategory::max('sequence');
        if ($max_order) {
            $subcategory->sequence = ++$max_order;
        } else {
            $subcategory->sequence = 1; // Corrected the sequence assignment
        }

        if (isset($images[$i])) {
            $destinationPath = 'images/cats/';
            $subcategory->image = $images[$i]->getClientOriginalName();
            $images[$i]->move($destinationPath, $images[$i]->getClientOriginalName());
        }

        if (isset($icons[$i])) {
            $iconDestinationPath = 'images/icons/';
            $subcategory->icon_image = $icons[$i]->getClientOriginalName();
            $icons[$i]->move($iconDestinationPath, $icons[$i]->getClientOriginalName());
        }

        $subcategory->category_id = $category_id;
        $subcategory->description = $description; // Set description once

        $subcategory->save();
    }

    // Redirect back to the previous page
    return back();
}




    public function store(Request $request)
    {
        

        $Category = new Category;

        $Category->name = $request->name;
        $Category->description = $request->description;
        // Get feature image
        $file = $request->file('image');
        $destinationPath = 'images/cats/';
        $Category->image = $file->getClientOriginalName();
        $file->move($destinationPath,$file->getClientOriginalName());
        
         // Get instrument image
        $file = $request->file('inst_img');
        $destinationPath = 'images/cats/';
        $Category->instrument_img = $file->getClientOriginalName();
        $file->move($destinationPath,$file->getClientOriginalName());

        $max_order = Category::max('sequence');
        if($max_order){$Category->sequence = ++$max_order;}
        else{$Category->sequence = 01;}
        $Category->save();

        $category_id = $Category->id;

        $names = $request->names;
        $images= $request->images;

        $values = array_combine($names, $images);
        // $subcat = array('images' => $values);
       
       
        // print_r( $subcat);die;
       

         foreach($values as $key => $image)
            {
                // return $image;die;
                $subcategory = new subcategory;
                $subcategory->name = $key;
                $max_order = subcategory::max('sequence');
                if($max_order){$subcategory->sequence = ++$max_order;}
                else{$subcategory->sequence = 01;}
                $destinationPath = 'images/cats/';
                // $img = $image->file($key);
                $subcategory->image = $image->getClientOriginalName();
                $image->move($destinationPath,$image->getClientOriginalName());
                $subcategory->category_id = $category_id;
                $subcategory->save();
                 
            } 

         
        return redirect()->route('categories');
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
        $category = Category::find($id);
        $subcategry = Category::find($id)->subcategory;
        return view('admin.categories.edit', compact("category","subcategry"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
     public function subcat_edit($catid,$id){
         $subcategry = subcategory::find($id);
          return view('admin.categories.edit_subcat', compact("subcategry","catid"));
     }
     
     public function update_subcat(Request $request, $id)
{
    $subcategory = subcategory::find($id);
    $subcategory->name = $request->name;
    
    // Strip tags from the description before saving
    $subcategory->description = strip_tags($request->description);

    $file = $request->file('image');
    if (empty($file)) {
        $subcategory->image = $request->old_img;
    } else {
        $destinationPath = 'images/cats/';
        $subcategory->image = $file->getClientOriginalName();
        $file->move($destinationPath, $file->getClientOriginalName());
    }

    // Handle icon_image
    $icon = $request->file('icon_image');
    if (!empty($icon)) {
        $iconDestinationPath = 'images/icons/';
        $subcategory->icon_image = $icon->getClientOriginalName();
        $icon->move($iconDestinationPath, $icon->getClientOriginalName());
    } else {
        // I'm assuming you have an 'old_icon' field in your request
        // If not, this line should be removed.
        $subcategory->icon_image = $request->old_icon;
    }

    $subcategory->update();

    $id = $request->catid;
    $subcategory = Category::find($id)->subcategory;
    return view('admin.categories.subcats', compact("subcategory", "id"));
}


    public function update(Request $request, $id)
    {
        //dd($request->all());
        // return $request;die;
        $Category = Category::find($id);

        $Category->name = $request->name;
        $Category->description = $request->description;
        
        $file = $request->file('image');
        if(empty($file)){
           $Category->image = $request->old_img; 
        }else{
            $destinationPath = 'images/cats/';
            $Category->image = $file->getClientOriginalName();
            $file->move($destinationPath,$file->getClientOriginalName());
        }
        
        $file = $request->file('instrument_img');
        if(empty($file)){
           $Category->instrument_img = $request->old_img; 
        }else{
            $destinationPath = 'images/cats/';
            $Category->instrument_img = $file->getClientOriginalName();
            $file->move($destinationPath,$file->getClientOriginalName());
        }

        $Category->update();
         return redirect()->route('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{   
    subcategory::where('category_id', $id)->delete();
    
    $Category = Category::find($id);

    if ($Category) {
        $Category->delete();
    }

    return redirect()->route('categories');
}


    public function del_subcat($catid,$id){
        $subcat = subcategory::find($id);
        $subcat->delete();
        $subcategory = Category::find($catid)->subcategory;
        $id= $catid;
        return view('admin.categories.subcats',compact("subcategory","id"));
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
