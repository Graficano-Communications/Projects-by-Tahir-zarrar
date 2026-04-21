<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\banner; 

class BannerController extends Controller
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
        $banners = banner::all()->sortBy('sequence');
        return view('admin.banner.banners',compact("banners"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created  resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
     */
    public  function store(Request $request)
    { 
        
        $banner = new banner;

        $banner->title = $request->caption;
        $banner->link = $request->link;
        $max_order = banner::max('sequence');
        if($max_order){$banner->sequence = ++$max_order;}
        else{$banner->sequence = 01;}
        // Get feature image
        $file = $request->file('image');
        $destinationPath = 'images';
        $banner->image = $file->getClientOriginalName();
        $file->move($destinationPath,$file->getClientOriginalName());
        $banner->save();
          
        return redirect()->route('banners.index')->with('success','Banner created successfully!');
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
         $banner = banner::where('id', $id)->first();
        return view('admin.banner.edit',compact("banner"));
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
        $banner = banner::find($id);

        $banner->title = $request->caption;
        $banner->link = $request->link;
        
        $file = $request->file('image');
        if(empty($file)){
           $banner->image = $request->old_img; 
        }else{
            $destinationPath = 'images';
            $banner->image = $file->getClientOriginalName();
            $file->move($destinationPath,$file->getClientOriginalName());
        }

        $banner->update();
        return redirect()->route('banners.index')->with('success','Banner updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = banner::find($id);
        $banner->delete();
        return back()->with('success','Banner deleted successfully!');
    }
    public function sort_banner(Request $request){
        $banners = $request->data;
        $i = 0;
        foreach ($banners as  $id) {
            $banner = banner::find($id);
            $banner->sequence  = $i;
            $banner->update();
            $i++;
        }
    }
}
