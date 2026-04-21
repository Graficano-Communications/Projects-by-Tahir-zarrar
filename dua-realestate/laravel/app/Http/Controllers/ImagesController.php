<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImagesController extends Controller
{
    public function view_image()
{
    $images = Image::orderBy('sequence')->get();
    return view('admin.images', compact('images'));
}

public function add_image()
{
    return view('admin.add-images');
}

public function add_image_data(Request $request)
{
    $image = new Image;
    $image->caption = $request->input('caption');
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/images/', $filename);
        $image->image = $filename;
    }
    $maxSequence = Image::max('sequence');
    $image->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;
    $image->save();

    return redirect()->route('images')->with('status', 'Image Added Successfully');
}

public function edit_image($id)
{
    $image = Image::find($id);
    return view('admin.edit-images', compact('image'));
}

public function edit_image_data(Request $request, $id)
{
    $image = Image::find($id);
    $image->caption = $request->input('caption');
    if ($request->hasFile('image')) {
        $destination = 'uploads/images/' . $image->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/images/', $filename);
        $image->image = $filename;
    }
    $image->update();

    return redirect()->route('images')->with('status', 'Image Updated Successfully');
}

public function delete_image($id)
{
    $image = Image::find($id);
    $destination = 'uploads/images/' . $image->image;
    if (File::exists($destination)) {
        File::delete($destination);
    }
    $image->delete();

    return redirect()->back()->with('status', 'Image Deleted Successfully');
}

public function sort_image(Request $request)
{
    $images = array_filter($request->input('data'), function ($value) {
        return !is_null($value) && $value !== '';
    });

    $i = 0;
    foreach ($images as $id) {
        $image = Image::find($id);
        if ($image) {
            $image->sequence = $i;
            $image->save();
            $i++;
        }
    }

    return response()->json(['success' => true, 'data' => $images]);
}

}
