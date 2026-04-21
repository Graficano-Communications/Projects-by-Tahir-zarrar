<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vimeovid;

class VimeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 
    public function index()
    { 
        $vimeos = vimeovid::all()->sortBy('sequence');
        return view('admin.vimeo.vimeos',compact("vimeos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('admin.vimeo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $vimeo =  new vimeovid;
       $vimeo->title = $request->title;
       $vimeo->description = $request->description;
       $vimeo->link = $request->link;
        if($request->has('feature')){
            $vimeo->featured = 1;
        }else{
            $vimeo->featured = 0;

        }
       $max_order = vimeovid::max('sequence');
        if($max_order){$vimeo->sequence = ++$max_order;}
        else{$vimeo->sequence = 01;}
       $vimeo->save();
       return redirect()->route('vimeos.index')->with('success','Vimeo Video updated successfully!');
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
        $vimeo = vimeovid::find($id);
        return view('admin.vimeo.edit',compact("vimeo"));
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
        $vimeo = vimeovid::find($id);
       $vimeo->title = $request->title;
       $vimeo->description = $request->description;
       $vimeo->link = $request->link;
        if($request->has('feature')){
            $vimeo->featured = 1;
        }else{
            $vimeo->featured = 0;

        }
       $vimeo->update();
       return redirect()->route('vimeos.index')->with('success','Vimeo Video updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vimeovid = vimeovid::find($id);
        $vimeovid->delete();
        return back()->with('success','Vimeo video deleted successfully!');
    }
    public function sort_media(Request $request){
        // return $request;
        $medias = $request->data;
        $i = 0;
        foreach ($medias as  $id) {
            $media = vimeovid::find($id);
            $media->sequence  = $i;
            $media->update();
            $i++;
        }
    }
}
