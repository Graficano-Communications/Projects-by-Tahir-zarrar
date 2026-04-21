<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AmenitiesController extends Controller
{
    public function view_amenity()
    {
        $amenities = Amenity::orderBy('sequence')->get();
        return view('admin.amenities', compact('amenities'));
    }

    public function add_amenity()
    {
        return view('admin.add-amenities');
    }

    public function add_amenity_data(Request $request)
    {
        // $validatedData = $request->validate([
        //     'caption' => 'required|string|max:255',
        //     'description' => 'nullable|string|max:255',
        // ]);

        $amenity = new Amenity;
        $amenity->caption = $request->input('caption');
        $amenity->description = $request->input('description');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/amenities/', $filename);
            $amenity->image = $filename;
        }
        $maxSequence = Amenity::max('sequence');
        $amenity->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;
        $amenity->save();

        return redirect()->route('all-amenities')->with('status', 'News Added Successfully');
    }

    public function edit_amenity($id)
    {
        $amenity = Amenity::find($id);
        return view('admin.edit-amenities', compact('amenity'));
    }

    public function edit_amenity_data(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'caption' => 'required|string|max:255',
        //     'description' => 'nullable|string|max:255',
        // ]);

        $amenity = Amenity::find($id);
        $amenity->caption = $request->input('caption');
        $amenity->description = $request->input('description');
        if ($request->hasFile('image')) {
            $destination = 'uploads/amenities/' . $amenity->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/amenities/', $filename);
            $amenity->image = $filename;
        }
        $amenity->update();

        return redirect()->route('all-amenities')->with('status', 'News Updated Successfully');
    }

    public function delete_amenity($id)
    {
        $amenity = Amenity::find($id);
        $destination = 'uploads/amenities/' . $amenity->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $amenity->delete();

        return redirect()->back()->with('status', 'News Deleted Successfully');
    }

    public function sort_amenity(Request $request)
    {
        $amenities = array_filter($request->input('data'), function ($value) {
            return !is_null($value) && $value !== '';
        });

        $i = 0;
        foreach ($amenities as $id) {
            $amenity = Amenity::find($id);
            if ($amenity) {
                $amenity->sequence = $i;
                $amenity->save();
                $i++;
            }
        }

        return response()->json(['success' => true, 'data' => $amenities]);
    }
}
