<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About; 
use App\Product;

class AboutController extends Controller
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
        $about=About::all()->sortBy('sequence');
        return view('admin.about.allabout',compact("about",$about)); 
    }


      

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.new');
    }
     

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      
    public function store(Request $request)
    {
      

        $About = new About;

        $About->page_name = $request->name;
        $About->description = $request->description;
        $About->points = $request->points;
        // Get feature image
        $file = $request->file('image');
        $destinationPath = 'images/about/';
        $About->image = $file->getClientOriginalName();
        $file->move($destinationPath,$file->getClientOriginalName());

        $banner = $request->file('banner');
        $About->banner = $banner->getClientOriginalName();
        $banner->move($destinationPath,$banner->getClientOriginalName());

        $max_order = About::max('sequence');
        if($max_order){$About->sequence = ++$max_order;}
        else{$About->sequence = 01;}

        $images = $request->other_images; 
        if($images){
            foreach($images as $key => $img)
            {  
                $ext = $img->getClientOriginalExtension(); 
                $name = date('YmdHis',time()).mt_rand().".".$ext;        
                $destinationPathorgin = 'images/about/slider/';
                $img->move($destinationPathorgin,$name);  
                $names[] = $name;
            }  
            $About->slider =json_encode($names);
        }

        $About->save();
 
         
        return redirect()->route('aboutus');
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
        $about = About::find($id); 
        return view('admin.about.edit', compact("about"));
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
        // return $request;die;
        $about = About::find($id);

        $about->page_name = $request->name;
        $about->description = $request->description;
        $about->points = $request->points;
        
        $file = $request->file('image');
        if(empty($file)){
           $about->image = $request->old_img; 
        }else{
            $destinationPath = 'images/about/';
            $about->image = $file->getClientOriginalName();
            $file->move($destinationPath,$file->getClientOriginalName());
        }

        $banner = $request->file('banner');
        if(empty($banner)){
           $about->banner = $request->old_banner; 
        }else{
            $destinationPath = 'images/about/';
            $about->banner = $banner->getClientOriginalName();
            $banner->move($destinationPath,$banner->getClientOriginalName());
        }

        $images = $request->other_images; 
        if($images){
            foreach($images as $key => $img)
            { 
                $ext = $img->getClientOriginalExtension(); 
                $name = date('YmdHis',time()).mt_rand().".".$ext;        
                $destinationPathorgin = 'images/about/slider/';
                $img->move($destinationPathorgin,$name);  
                $names[] = $name;
            }  
            $about->slider =json_encode($names);
        }


        $about->update();
        return redirect()->route('aboutus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $about = About::find($id);
        $about->delete();
        return redirect()->route('aboutus');
    }
    
    public function deleteimg($image,$id){
        $about = About::find($id);
      
        $imgs = json_decode($about->slider); 
       
        if (($key = array_search($image ,$imgs)) !== false) {
           unset($imgs[$key]);
         }
         $about->slider = json_encode(array_values($imgs));
         $about->save();
        return redirect()->back();
   }


     
    public function sort_about(Request $request){
        // return $request;
        $about = $request->data;
        $i = 0;
        foreach ($about as  $id) {
            $about = About::find($id);
            $about->sequence  = $i;
            $about->update();
            $i++;
        }


    } 
}
