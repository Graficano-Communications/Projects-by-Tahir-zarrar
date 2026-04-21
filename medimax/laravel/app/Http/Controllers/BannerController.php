<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('sequence')->get();
        $alertMessage = session('success');
        return view('admin.banners.index', compact('banners', 'alertMessage'));
    }

    public function create()
    {
        return view('admin.banners.new');
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banners.edit', compact('banner'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $banner = new Banner;

        // Get the uploaded file
        $file = $request->file('image');

        // Define the destination path within the public folder
        $destinationPath = public_path('images/banners');

        // Get the original name of the file
        $fileName = $file->getClientOriginalName();

        // Move the file to the destination path
        $file->move($destinationPath, $fileName);

        // Save the file name to the database
        $banner->image = $fileName;

        // Set other banner attributes
        $banner->title = $request->input('title');
        $banner->status = $request->input('status');
        $banner->description = $request->input('description');

        // Automatically set the sequence
        $banner->sequence = Banner::max('sequence') + 1;

        // Save the banner instance
        $banner->save();

        // Return a response or redirect
        return redirect()->route('banners')->with('success', 'Banner created successfully.');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

        // Delete the image from the public folder
        $imagePath = public_path('images/banners/' . $banner->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $banner->delete();

        return redirect()->route('banners')->with('success', 'Banner deleted successfully');
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        

        $banner->title = $request->input('title');
        $banner->description = $request->input('editor1');
        $banner->status = $request->input('status');

        if ($request->hasFile('image')) {
            // Delete the old image from the public folder
            $oldImagePath = public_path('images/banners/' . $banner->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Get the new uploaded file
            $file = $request->file('image');

            // Define the destination path within the public folder
            $destinationPath = public_path('images/banners');

            // Get the original name of the file
            $fileName = $file->getClientOriginalName();

            // Move the file to the destination path
            $file->move($destinationPath, $fileName);

            // Save the new file name to the database
            $banner->image = $fileName;
        }

        $banner->save();

        return redirect()->route('banners')->with('success', 'Banner updated successfully');
    }

    public function updateSequence(Request $request)
    {
        $banners = $request->data;
        $i = 0;
        foreach ($banners as $id) {
            $banner = Banner::find($id);
            $banner->sequence = $i;
            $banner->update();
            $i++;
        }

        return response()->json(['message' => 'Sequence updated successfully']);
    }

    public function approve(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        $request->validate([
            'status' => 'required|string',
        ]);

        $banner->status = $request->input('status');

        $banner->save();

        return redirect()->route('banners')->with('success', 'Banner updated successfully');
    }
}
