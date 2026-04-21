<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog; 


class BlogController extends Controller
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
        $blogs = blog::all()->sortBy('sequence');
        return view('admin.blogs.index',compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

 
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('upload')->move('images/blogs/', $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/blogs/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;

        }

    }
    public  function store(Request $request)
    { 
        
        $blog = new blog;
 
        $blog->title = $request->title;
        $blog->content = $request->editor1;

        $title = preg_replace('/[^A-Za-z0-9\-]/', ' ', $request->title);
        if (strlen(trim($title)) > 0){
            $blog->slug = str_replace(' ','-',strtolower($title));
        }else{
            $blog->slug  = strtolower($title);
        }

        $max_order = blog::max('sequence');
        if($max_order){$blog->sequence = ++$max_order;}
        else{$blog->sequence = 01;}

        $file = $request->file('image');
        $destinationPath = 'images/blogs/';
        $blog->images = $file->getClientOriginalName();
        $file->move($destinationPath,$file->getClientOriginalName());

        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->save();
          
        return redirect()->route('blogs.index')->with('success','blog created successfully!');
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
         $blog = blog::where('id', $id)->first();
        return view('admin.blogs.edit',compact("blog"));
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
        $blog = blog::find($id);

        $blog->title = $request->title;
        $blog->content = $request->editor1;

        $title = preg_replace('/[^A-Za-z0-9\-]/', ' ', $request->title);
        if (strlen(trim($title)) > 0){
            $blog->slug = str_replace(' ','-',strtolower($title));
        }else{
            $blog->slug  = strtolower($title);
        }

        $max_order = blog::max('sequence');
        if($max_order){$blog->sequence = ++$max_order;}
        else{$blog->sequence = 01;}
       
        $file = $request->file('image');
        if(empty($file)){
           $blog->images = $request->old_img; 
        }else{
            $destinationPath = 'images/blogs/';
            $blog->images = $file->getClientOriginalName();
            $file->move($destinationPath,$file->getClientOriginalName());
        }

        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;

        $blog->update();
        return redirect()->route('blogs.index')->with('success','blog updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = blog::find($id);
        $blog->delete();
        return back()->with('success','blog deleted successfully!');
    }
    public function sort_blog(Request $request){
        $blogs = $request->data;
        $i = 0;
        foreach ($blogs as  $id) {
            $blog = blog::find($id);
            $blog->sequence  = $i;
            $blog->update();
            $i++;
        }
    }
}
