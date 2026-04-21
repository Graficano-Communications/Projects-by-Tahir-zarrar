<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
class BlogsController extends Controller
{
    public function index(){
        $blog = Blog::orderBy('sequence')->get();
        return view('admin.blogs', compact('blog'));
    }
    public function add_blog()
    {
        return view('admin.add-blog');
    }
    public function store_blog(Request $request)
    {
        // dd($request->all());

        $blog = new Blog;
        $blog->name = $request->input('name');
        $blog->description = $request->input('editor1');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $originalFilename = $file->getClientOriginalName();
            $filename = Str::uuid() . '_' . $originalFilename;
            $file->move('uploads/blogs/', $filename);
            $blog->image = $filename;
        }
        
        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $originalFilename = $file->getClientOriginalName();
            $filename = Str::uuid() . '_' . $originalFilename;
            $file->move('uploads/blogs/', $filename);
            $blog->banner_image = $filename;
        }
        $maxSequence = Blog::max('sequence');
        $blog->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;
        $blog->save();
        return redirect()-> route('admin-blogs')->with('status', 'Blog Added Successfully');
    
    }
    public function edit_blog($id)
    {
        $blog = Blog::find($id);
        return view('admin.edit-blog', compact('blog'));
    }
    public function update_blog(Request $request, $id)
    {

        // dd($request->all());
        $blog = Blog::find($id);
    
        // Check if the blog exists
        if (!$blog) {
            return redirect()-> route('admin-blogs')->with('error', 'blog not found');
        }
    
        // Update the blog's name and password
        $blog->name = $request->input('name');
        $blog->description = $request->input('editor1');// Use bcrypt for password encryption
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $destination = 'uploads/blogs/' . $blog->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/blogs/', $filename);
            $blog->image = $filename;
        }
    
        // Handle PDF upload
        if ($request->hasFile('banner_image')) {
            $destination = 'uploads/blogs/' . $blog->banner_image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('banner_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/blogs/', $filename);
            $blog->banner_image = $filename;
        }
    
        // Save the updated blog
        $blog->update();
    
        return redirect()-> route('admin-blogs')->with('status', 'Blog updated successfully');
    }
    public function delete_blog($id)
    {
        $blog = Blog::find($id);
        $destination = 'uploads/blogs/'.$blog->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $destination = 'uploads/blogs/'.$blog->banner_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $blog->delete();
        return redirect()->back()->with('status','Blog  Deleted Successfully');
    }
    public function sort_blog(Request $request) {
        $blogs = array_filter($request->input('data'), function($value) {
            return !is_null($value) && $value !== '';
        });
    
        $i = 0;
        foreach ($blogs as $id) {
            $blog = Blog::find($id);
            if ($blog) {
                $blog->sequence = $i;
                $blog->save();
                $i++;
            }
        }
    
        return response()->json(['success' => true, 'data' => $blogs]);
    }
    
}
