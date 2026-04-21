<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecordController extends Controller
{

    public function index()
{
    // Fetch all records
    $records = Record::all();

    // Pass records to the view
    return view('admin.records', compact('records'));
}
    public function add_record()
    {
        
        return view('admin.add-records');
    }
    public function store(Request $request)
{
    // Validate form data, ensuring position is unique
    $request->validate([
        'position' => 'required|integer|unique:records,position',  // Ensures position is unique in the records table
        'caption' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',  // Optional image validation
    ]);

    // Check if the position is already taken
    $existingRecord = Record::where('position', $request->position)->first();

    if ($existingRecord) {
        // If the position is already taken, return an error or message
        return redirect()->back()->withErrors(['position' => 'This position is already taken. Please choose a different position.']);
    }

    // Handle image upload if provided
    $imagePath = null;
    if ($request->hasFile('image')) {
        // Get the uploaded image file
        $file = $request->file('image');
        
        // Generate a unique filename using the current timestamp and the file's original extension
        $filename = time() . '.' . $file->getClientOriginalExtension();
        
        // Move the file to 'uploads/records' directory
        $file->move(public_path('uploads/records'), $filename);
        
        // Save the file path to be stored in the database (accessible via the 'uploads' directory)
        $imagePath = 'uploads/records/' . $filename; // The path in 'public/uploads/records'
    }

    // Create a new record in the database
    Record::create([
        'position' => $request->position,
        'caption' => $request->caption,
        'image' => $imagePath,  // Save image path if uploaded
    ]);

    // Redirect back with success message
    return redirect()->route('product-detail')->with('success', 'Record added successfully!');
}


    public function edit($id)
{
    // Find the record by its ID
    $record = Record::findOrFail($id);

    // Pass the record to the view for editing
    return view('admin.edit-records', compact('record'));
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
    $record = Record::findOrFail($id);

    // Update record data
    $record->position = $request->position;
    $record->caption = $request->caption;

    // Handle image upload if provided
    if ($request->hasFile('image')) {
        // Delete the old image if it exists (optional, depending on whether you want to keep it)
        if ($record->image) {
            // Delete the old image from storage
            $oldImagePath = public_path('uploads/records/' . $record->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        // Get the uploaded image file
        $file = $request->file('image');
        
        // Generate a unique filename
        $filename = time() . '.' . $file->getClientOriginalExtension();
        
        // Move the file to 'uploads/records' folder
        $file->move(public_path('uploads/records'), $filename);
        
        // Update the image path in the database
        $record->image = 'uploads/records/' . $filename;  // Path relative to public storage
    }

    // Save the updated record
    $record->save();

    // Redirect back with success message
    return redirect()->route('records.index')->with('success', 'Record updated successfully!');
}


public function destroy($id)
{
    // Find the record and delete it
    $record = Record::findOrFail($id);
    $record->delete();

    // Redirect back with success message
    return redirect()->route('records.index')->with('success', 'Record deleted successfully!');
}


}
