<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannersController extends Controller
{
    public function view_banner()
    {
        $banners = Banner::orderBy('sequence')->get();
        return view('admin.banners' , compact('banners'));
    }

    public function add_banner()
    {
        return view('admin.add-banners');
    }


    public function add_banner_data(Request $request)
    {
        // dd($request->all());

        $banner = new Banner;
        $banner->caption = $request->input('caption');
        $banner->meta_title = $request->input('meta_title');
        $banner->meta_description = $request->input('meta_description');
        $banner->description = $request->input('description');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/banners/', $filename);
            $banner->image = $filename;
        }
        $maxSequence = Banner::max('sequence');
        $banner->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;
        $banner->save();
        return redirect()->route('banners')->with('status', 'Banner Added Successfully');
    
    }


    public function edit_banner($id)
    {
        $banners = Banner::find($id);
        return view('admin.edit-banners', compact('banners'));
    }


    public function edit_banner_data(Request $request, $id)
    {
        $banners = Banner::find($id);
        $banners->caption = $request->input('caption');
        $banners->meta_title = $request->input('meta_title');
        $banners->meta_description = $request->input('meta_description');
        $banners->description = $request->input('description');
        if($request->hasfile('image'))
        {
            $destination = 'uploads/banners/'.$banners->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/banners/', $filename);
            $banners->image = $filename;
        }
        $banners->update();
        return redirect()->route('banners')->with('status', 'Banner Updated Successfully');
    }
    public function delete_banner($id)
    {
        $banners = Banner::find($id);
        $destination = 'uploads/banners/'.$banners->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $banners->delete();
        return redirect()->back()->with('status','Banners Deleted Successfully');
    }
    public function sort_banner(Request $request) {
        // Log incoming request data for debugging
        // Uncomment the next line if needed for debugging purposes
        // dd($request->all());
    
        $banners = array_filter($request->input('data'), function($value) {
            return !is_null($value) && $value !== '';
        });
    
        $i = 0;
        foreach ($banners as $id) {
            $banner = Banner::find($id);
            if ($banner) {
                $banner->sequence = $i;
                $banner->save();
                $i++;
            }
        }
    
        return response()->json(['success' => true, 'data' => $banners]);
    }
    

}