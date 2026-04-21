<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blogs::orderBy('sequence')->get();
        $alertMessage = session('success');
        return view('admin.blogs.index', compact('blogs', 'alertMessage'));
    }

    public function create()
    {
        return view('admin.blogs.new');
    }

    public function edit($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'blog_name' => 'required|string|max:255',
            'front_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'detail_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'editor1' => 'required|string',
            'feature' => 'required|boolean',
        ]);

        // Handle front image upload
        if ($request->hasFile('front_image')) {
            $frontFile = $request->file('front_image');
            $frontDestinationPath = public_path('images/blogs');
            $uniqueId = rand(100000, 999999);
            $frontFileName = $frontFile->getClientOriginalName();
            $imageName = $uniqueId . '_' . $frontFileName;
            $frontFile->move($frontDestinationPath, $imageName);
            $frontImagePath = 'images/blogs/' . $imageName;
        }

        // Handle detail image upload
        if ($request->hasFile('detail_image')) {
            $detailFile = $request->file('detail_image');
            $detailDestinationPath = public_path('images/blogs');
            $uniqueId = rand(100000, 999999);
            $detailFileName = $detailFile->getClientOriginalName();
            $imageName = $uniqueId . '_' . $detailFileName;
            $detailFile->move($detailDestinationPath, $imageName);
            $detailImagePath = 'images/blogs/' . $imageName;
        }

        $latestSequence = Blogs::max('sequence') ?? 0;

        Blogs::create([
            'blog_name' => $request->input('blog_name'),
            'front_image' => $frontImagePath,
            'detail_image' => $detailImagePath,
            'sequence' => $latestSequence + 1,
            'description' => $request->input('editor1'),
            'feature' => $request->input('feature'),
        ]);

        return redirect()->route('blogs')->with('success', 'Blog added successfully');
    }

    public function destroy($id)
    {
        $blog = Blogs::findOrFail($id);

        // Delete the front image
        $frontImagePath = public_path($blog->front_image);
        if (file_exists($frontImagePath)) {
            unlink($frontImagePath);
        }

        // Delete the detail image
        $detailImagePath = public_path($blog->detail_image);
        if (file_exists($detailImagePath)) {
            unlink($detailImagePath);
        }

        // Delete the blog entry
        $blog->delete();

        return redirect()->back()->with('success', 'Blog deleted successfully');
    }

    public function update(Request $request, $id)
    {
        
        $blog = Blogs::findOrFail($id);

       

        $blog->blog_name = $request->input('blog_name');
        $blog->status = $request->input('status');
        $blog->description = $request->input('editor1');
        $blog->feature = $request->input('feature', 0);

        // Update front image if provided
        if ($request->hasFile('front_image')) {
            // Delete previous front image
            $frontImagePath = public_path($blog->front_image);
            if (file_exists($frontImagePath)) {
                unlink($frontImagePath);
            }

            $frontFile = $request->file('front_image');
            $frontDestinationPath = public_path('images/blogs');
            $uniqueId = rand(100000, 999999);
            $frontFileName = $frontFile->getClientOriginalName();
            $imageName = $uniqueId . '_' . $frontFileName;
            $frontFile->move($frontDestinationPath, $imageName);
            $blog->front_image = 'images/blogs/' . $imageName;
        }

        // Update detail image if provided
        if ($request->hasFile('detail_image')) {
            // Delete previous detail image
            $detailImagePath = public_path($blog->detail_image);
            if (file_exists($detailImagePath)) {
                unlink($detailImagePath);
            }

            $detailFile = $request->file('detail_image');
            $detailDestinationPath = public_path('images/blogs');
            $uniqueId = rand(100000, 999999);
            $detailFileName = $detailFile->getClientOriginalName();
            $imageName = $uniqueId . '_' . $detailFileName;
            $detailFile->move($detailDestinationPath, $imageName);
            $blog->detail_image = 'images/blogs/' . $imageName;
        }

        $blog->save();

        return redirect()->route('blogs')->with('success', 'Blog updated successfully');
    }

    public function updateSequence(Request $request)
    {
        $banners = $request->data;
        $i = 0;
        foreach ($banners as $id) {
            $banner = Blogs::find($id);
            $banner->sequence = $i;
            $banner->update();
            $i++;
        }

        return response()->json(['message' => 'Sequence updated successfully']);
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            // Use storage_path to get the full path in the storage directory
            $filePath = storage_path('app/public/blogs/' . $fileName);

            $request->file('upload')->move(storage_path('app/public/blogs/'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/blogs/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    public function approve(Request $request, $id)
    {
        $banner = Blogs::findOrFail($id);

        if ($request->has('feature')) {
            $request->validate(['feature' => 'required|string']);
            $banner->feature = $request->input('feature');
        } elseif ($request->has('status')) {
            $request->validate(['status' => 'required|string']);
            $banner->status = $request->input('status');
        }

        $banner->save();

        return redirect()->route('blogs')->with('success', 'Blog updated successfully');
    }
}
