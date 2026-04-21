<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FrontController extends Controller
{
    public function view_banner()
    {
        $banners = Image::all();
        return view('admin.banners' , compact('banners'));
    }
    public function view_result()
{
    $banners = Image::first();
    $positions = Record::pluck('position')->toArray();
    $records = Record::all(); // Fetch all records
    return view('frontend.index', compact('banners', 'positions', 'records'));
}

    

    public function add_banner()
    {
        $banners = Image::first(); // Fetch the banner image (if required)
        $positions = Record::pluck('position')->toArray(); // Fetch all positions
        return view('admin.add-banners', compact('banners', 'positions'));
    }
    


    public function add_banner_data(Request $request)
{
    $validatedData = $request->validate([
        'caption' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);

    // Check if a banner record already exists
    $existingBanner = Image::first();

    if ($existingBanner) {
        return redirect()->back()->with('status', 'A banner already exists. You can only have one banner.');
    }

    // Proceed with adding the banner
    $banner = new Image;
    $banner->caption = $request->input('caption');
    
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/banners/', $filename);
        $banner->image = $filename;
    }

    $banner->save();
    return redirect()->route('product-detail')->with('status', 'Banner Added Successfully');
}



    public function edit_banner($id)
    {
        $banners = Image::find($id);
        return view('admin.edit-banners', compact('banners'));
    }


    public function edit_banner_data(Request $request, $id)
    {
        {
            $validatedData = $request->validate([
                'caption' => 'required|string|max:255',
                // 'image' => 'required|varchar',
            ]);
        }
        $banners = Image::find($id);
        $banners->caption = $request->input('caption');
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
        $banners = Image::find($id);
        $destination = 'uploads/banners/'.$banners->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $banners->delete();
        return redirect()->back()->with('status','Banners Deleted Successfully');
    }
}
