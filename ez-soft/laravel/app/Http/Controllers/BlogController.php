<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
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
        $blog->qoute = $request->input('qoute');
        $blog->qoute_writer = $request->input('qoute_writer');
        $blog->description = $request->input('editor1');
        $blog->description1 = $request->input('editor2');
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
        $blog = Blog::find($id);

        // Check if the blog exists
        if (!$blog) {
            return redirect()->route('admin-blogs')->with('error', 'Blog not found');
        }

        // Update the blog's fields
        $blog->name = $request->input('name');
        $blog->qoute = $request->input('qoute');
        $blog->qoute_writer = $request->input('qoute_writer');
        $blog->description = $request->input('editor1');
        $blog->description1 = $request->input('editor2');

        // Handle main image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (!empty($blog->image) && file_exists('uploads/blogs/' . $blog->image)) {
                unlink('uploads/blogs/' . $blog->image);
            }

            // Upload new image
            $file = $request->file('image');
            $originalFilename = $file->getClientOriginalName();
            $filename = Str::uuid() . '_' . $originalFilename;
            $file->move('uploads/blogs/', $filename);

            // Update image field in the database
            $blog->image = $filename;
        }

        // Handle banner image upload
        if ($request->hasFile('banner_image')) {
            // Delete the old banner image if it exists
            if (!empty($blog->banner_image) && file_exists('uploads/blogs/' . $blog->banner_image)) {
                unlink('uploads/blogs/' . $blog->banner_image);
            }

            // Upload new banner image
            $file = $request->file('banner_image');
            $originalFilename = $file->getClientOriginalName();
            $filename = Str::uuid() . '_' . $originalFilename;
            $file->move('uploads/blogs/', $filename);

            // Update banner image field in the database
            $blog->banner_image = $filename;
        }

        // Save the updated blog
        $blog->save();

        return redirect()->route('admin-blogs')->with('status', 'Blog updated successfully');
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
