<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\page; 

class PagesController extends Controller
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
        $pages = page::all()->sortBy('sequence');
        return view('admin.pages.index',compact("pages"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

 
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('upload')->move('images/pages/', $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/pages/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;

        }

    }
    public  function store(Request $request)
    { 
        
        $page = new page;
 
        $page->title = $request->title;
        $page->content = $request->editor1;

        $title = preg_replace('/[^A-Za-z0-9\-]/', ' ', $request->title);
        if (strlen(trim($title)) > 0){
            $page->slug = str_replace(' ','-',strtolower($title));
        }else{
            $page->slug  = strtolower($title);
        }

        $max_order = page::max('sequence');
        if($max_order){$page->sequence = ++$max_order;}
        else{$page->sequence = 01;}
       

        $page->meta_title = $request->meta_title;
        $page->meta_description = $request->meta_description;
        $page->save();
          
        return redirect()->route('pages.index')->with('success','page created successfully!');
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
         $page = page::where('id', $id)->first();
        return view('admin.pages.edit',compact("page"));
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
        $page = page::find($id);

        $page->title = $request->title;
        $page->content = $request->editor1;

        $title = preg_replace('/[^A-Za-z0-9\-]/', ' ', $request->title);
        if (strlen(trim($title)) > 0){
            $page->slug = str_replace(' ','-',strtolower($title));
        }else{
            $page->slug  = strtolower($title);
        }

        $max_order = page::max('sequence');
        if($max_order){$page->sequence = ++$max_order;}
        else{$page->sequence = 01;}
       

        $page->meta_title = $request->meta_title;
        $page->meta_description = $request->meta_description;

        $page->update();
        return redirect()->route('pages.index')->with('success','page updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = page::find($id);
        $page->delete();
        return back()->with('success','page deleted successfully!');
    }
    public function sort_page(Request $request){
        $pages = $request->data;
        $i = 0;
        foreach ($pages as  $id) {
            $page = page::find($id);
            $page->sequence  = $i;
            $page->update();
            $i++;
        }
    }
}
