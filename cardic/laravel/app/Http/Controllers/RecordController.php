<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\ProImage;
use App\Record as AppRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecordController extends Controller
{

    public function index($id)
    {
        $Prodata =  ProImage::find($id);
       
        $records = $Prodata->records()->get(); 

        // Pass records to the view
        return view('admin.Product-detail.records', compact('records'));
    }
    public function add_record()
    {

        return view('admin.Product-detail.add-records');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'position' => 'required|integer',  // Ensures position is unique in the records table
            'caption' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'pro_id'=> 'required|integer',
        ]);

        //dd('hi');

        // Check if the position is already taken
        // $existingRecord = AppRecord::where('position', $request->position)->first();



        // if ($existingRecord) {
        //     dd('hi');
        //     return redirect()->back()->withErrors(['position' => 'This position is already taken. Please choose a different position.']);
        // }

        // Handle image upload if provided
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Get the uploaded image file
            $file = $request->file('image');

            // Generate a unique filename using the current timestamp and the file's original extension
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // Move the file to 'uploads/records' directory
            $file->move('uploads/records', $filename);

            // Save the file path to be stored in the database (accessible via the 'uploads' directory)
            $imagePath = 'uploads/records/' . $filename; // The path in 'public/uploads/records'
        }

        // Create a new record in the database
        AppRecord::create([
            'pro_id' => $request->pro_id,
            'position' => $request->position,
            'caption' => $request->caption,
            'image' => $imagePath,  // Save image path if uploaded
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Record added successfully!');
    }


    public function edit($id)
    {
        // Find the record by its ID
        $record = AppRecord::findOrFail($id);

        // Pass the record to the view for editing
        return view('admin.Product-detail.edit-records', compact('record'));
    }
    public function update(Request $request, $id)
    {
        // Validate form data
        $request->validate([
            'position' => 'required|integer|unique:records,position,' . $id, // Exclude current record's position from the uniqueness check
            'caption' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Find the record to update
        $record = AppRecord::findOrFail($id);

        // Update record data
        $record->position = $request->position;
        $record->caption = $request->caption;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists (optional, depending on whether you want to keep it)
            if ($record->image) {
                // Delete the old image from storage
                $oldImagePath = ('uploads/records/' . $record->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Get the uploaded image file
            $file = $request->file('image');

            // Generate a unique filename
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // Move the file to 'uploads/records' folder
            $file->move('uploads/records', $filename);

            // Update the image path in the database
            $record->image = 'uploads/records/' . $filename;  // Path relative to public storage
        }

        // Save the updated record
        $record->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Record updated successfully!');
    }

  


    public function destroy($id)
    {
        // Find the record and delete it
        $record = AppRecord::findOrFail($id);
        $record->delete();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Record deleted successfully!');
    }
}
