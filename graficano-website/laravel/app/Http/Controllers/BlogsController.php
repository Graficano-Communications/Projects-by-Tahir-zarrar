<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Exception;

class BlogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the blogs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $blogs = Blog::all()->sortby('sequence');

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new blog.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {


        return view('blogs.create');
    }

    /**
     * Store a new blog in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string',
        'writer_name' => 'required|string',
        'quot' => 'nullable|string',
       
        'meta_title' => 'nullable|string',
        'meta_tags' => 'nullable|string',
        'meta_description' => 'nullable|string',
    ]);

    $blog = new Blog;
    $blog->title = $request->input('title');

    $name = preg_replace('/[^A-Za-z0-9\-]/', ' ', $request->input('title'));
    $url = strlen(trim($name)) > 0 ? str_replace(' ', '-', strtolower($name)) : strtolower($name);
    $blog->slug = $url;

    // Ensure that 'description' is not null
    $blog->description = $request->input('description') ?: '';
    $blog->description1 = $request->input('description1') ?: '';
    $blog->writer_name = $request->input('writer_name') ?: '';
    $blog->quot = $request->input('quot');

    $destinationPath = 'images/blogs/';

    // Handle avatar_photo
    if ($request->hasFile('avatar_photo') && $request->file('avatar_photo')->isValid()) {
        $avatarFile = $request->file('avatar_photo');
        $avatarName = date('YmdHis') . mt_rand() . '.' . $avatarFile->getClientOriginalExtension();
        $avatarFile->move($destinationPath, $avatarName);
        $blog->avatar_photo = $avatarName;
    } else {
        $blog->avatar_photo = null;
    }

    // Handle image
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $imageFile = $request->file('image');
        $imageName = date('YmdHis') . mt_rand() . '.' . $imageFile->getClientOriginalExtension();
        $imageFile->move($destinationPath, $imageName);
        $blog->image = $imageName;
    } else {
        $blog->image = null;
    }

    // Handle banner
    if ($request->hasFile('banner') && $request->file('banner')->isValid()) {
        $bannerFile = $request->file('banner');
        $bannerName = date('YmdHis') . mt_rand() . '.' . $bannerFile->getClientOriginalExtension();
        $bannerFile->move($destinationPath, $bannerName);
        $blog->banner = $bannerName;
    } else {
        $blog->banner = null;
    }

    // Handle image1
    if ($request->hasFile('image1') && $request->file('image1')->isValid()) {
        $image1File = $request->file('image1');
        $image1Name = date('YmdHis') . mt_rand() . '.' . $image1File->getClientOriginalExtension();
        $image1File->move($destinationPath, $image1Name);
        $blog->image1 = $image1Name;
    } else {
        $blog->image1 = null;
    }

    // Handle image2
    if ($request->hasFile('image2') && $request->file('image2')->isValid()) {
        $image2File = $request->file('image2');
        $image2Name = date('YmdHis') . mt_rand() . '.' . $image2File->getClientOriginalExtension();
        $image2File->move($destinationPath, $image2Name);
        $blog->image2 = $image2Name;
    } else {
        $blog->image2 = null;
    }

    $maxOrder = Blog::max('sequence');
    $blog->sequence = $maxOrder ? ++$maxOrder : 1;

    $blog->meta_title = $request->input('meta_title') ?: '';
    $blog->meta_tags = $request->input('meta_tags') ?: '';
    $blog->meta_description = $request->input('meta_description') ?: '';

    $blog->save();

    return redirect()->route('blogs.blog.index')
        ->with('success_message', 'Blog was successfully added.');
}

    

    

    
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move('images/blogs/', $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/blogs/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    /**
     * Display the specified blog.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified blog.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);


        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified blog in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
{
    // Validate input

    // Retrieve the blog by ID
    $blog = Blog::findOrFail($id);
    
    // Update blog fields from the request input
    $blog->title = $request->input('title');
    $blog->quot = $request->input('quot') ;
    $blog->slug = $request->input('slug');
    $blog->description = $request->input('description') ?: '';
    $blog->description1 = $request->input('description1') ?: '';
    $blog->writer_name = $request->input('writer_name') ?: '';
    $blog->meta_title = $request->input('meta_title') ?: '';
    $blog->meta_tags = $request->input('meta_tags') ?: '';
    $blog->meta_description = $request->input('meta_description') ?: '';

    $destinationPath = 'images/blogs/';
    
    // Handle avatar photo
    if ($request->hasFile('avatar_photo') && $request->file('avatar_photo')->isValid()) {
        $avatarFile = $request->file('avatar_photo');
        $avatarName = date('YmdHis') . mt_rand() . '.' . $avatarFile->getClientOriginalExtension();
        $avatarFile->move($destinationPath, $avatarName);
        $blog->avatar_photo = $avatarName;
    }

    // Handle main image
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $file = $request->file('image');
        $imageName = date('YmdHis') . mt_rand() . '.' . $file->getClientOriginalExtension();
        $file->move($destinationPath, $imageName);
        $blog->image = $imageName;
    } else {
        // Retain old image if new one is not uploaded
        $blog->image = $request->input('old_image');
    }

    // Handle banner image
    if ($request->hasFile('banner') && $request->file('banner')->isValid()) {
        $banner = $request->file('banner');
        $bannerName = date('YmdHis') . mt_rand() . '.' . $banner->getClientOriginalExtension();
        $banner->move($destinationPath, $bannerName);
        $blog->banner = $bannerName;
    } else {
        // Retain old banner if new one is not uploaded
        $blog->banner = $request->input('old_banner');
    }

    // Handle additional image1
    if ($request->hasFile('image1') && $request->file('image1')->isValid()) {
        $file1 = $request->file('image1');
        $image1Name = date('YmdHis') . mt_rand() . '.' . $file1->getClientOriginalExtension();
        $file1->move($destinationPath, $image1Name);
        $blog->image1 = $image1Name;
    } else {
        // Retain old image1 if new one is not uploaded
        $blog->image1 = $request->input('old_image1');
    }

    // Handle additional image2
    if ($request->hasFile('image2') && $request->file('image2')->isValid()) {
        $file2 = $request->file('image2');
        $image2Name = date('YmdHis') . mt_rand() . '.' . $file2->getClientOriginalExtension();
        $file2->move($destinationPath, $image2Name);
        $blog->image2 = $image2Name;
    } else {
        // Retain old image2 if new one is not uploaded
        $blog->image2 = $request->input('old_image2');
    }

    // Sequence order remains unchanged during update unless explicitly altered
    $blog->sequence = $blog->sequence;

    // Save the updated blog
    $blog->save();

    // Redirect with a success message
    return redirect()->route('blogs.blog.index')
        ->with('success_message', 'Blog was successfully updated.');
}

    

    /**
     * Remove the specified blog from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $blog->delete();

            return redirect()->route('blogs.blog.index')
                ->with('success_message', 'Blog was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }


    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'title' => 'required|string|min:1|max:191',
            'image' => 'required',
            'banner' => 'required',
            'description' => 'required|string|min:1|max:4294967295',
            'writer_name' => 'required|string|min:1|max:191',
            'avatar_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',

            'meta_title' => 'nullable|string|min:0|max:191',
            'meta_description' => 'nullable',
            'meta_tags' => 'nullable',
        ];


        $data = $request->validate($rules);




        return $data;
    }
    protected function getUpdateData(Request $request)
    {
        $rules = [
            'title' => 'required|string|min:1|max:191',
            'slug' => 'required|string|min:1|max:191',
            'description' => 'required|string|min:1|max:4294967295',
            'writer_name' => 'required|string|min:1|max:191',
            'avatar_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',

            'meta_title' => 'nullable|string|min:0|max:191',
            'meta_description' => 'nullable',
            'meta_tags' => 'nullable',
        ];


        $data = $request->validate($rules);




        return $data;
    }
    // public function sort_blog(Request $request){
    //     $blogs = $request->data;
    //     $i = 0;
    //     foreach ($blogs as  $id) {
    //         $blog = Blog::find($id);
    //         $blog->sequence  = $i;
    //         $blog->update();
    //         $i++;
    //     }
    // }

    public function sort_blog(Request $request)
    {
        //dd($request->all());
        $blogs = $request->ids; // Get the ids from the request
        $i = 0;

        foreach ($blogs as $id) {
            $blog = Blog::find($id);
            // dd($blog);

            // Check if the post exists to avoid potential errors
            if ($blog) {
                $blog->sequence = $i;
                $blog->save();
            }

            $i++;
        }

        return response()->json(['status' => 'success']);
    }
}
