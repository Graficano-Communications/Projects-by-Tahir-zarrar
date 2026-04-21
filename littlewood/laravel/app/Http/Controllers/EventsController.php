<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventsController extends Controller
{
    public function view_events(){
        $events = Event::all();

        
        return view('admin.events' , compact('events'));

        
    }
    public function add_event()
    {
        return view('admin.add-events');
    }

    
public function add_event_data(Request $request)
{
    //dd($request->all());
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string|max:255',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validate each image file
    ]);

    $event = new Event;
    $event->name = $request->input('name');
    $event->date = $request->input('date');
    $event->location = $request->input('location');
    $event->description = $request->input('description');

    $images = [];
    if ($request->hasFile('image')) {
        foreach ($request->file('image') as $file) {
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '_' . uniqid() . '.' . $extension;
            $file->move('uploads/events/', $filename);
            $images[] = $filename;
        }
        //dd($images);
    }
    
    // Convert the array of image filenames into a comma-separated string
    $imageString = implode(',', $images);
    //dd($imageString);
    $event->image = $imageString; // Assuming 'images' is the column name where you store the array
    $event->save();
    
    return redirect('all-events')->with('status', 'Images Added Successfully');
}



    public function edit_event($id)
    {
        $events = Event::find($id);
        return view('admin.edit-events', compact('events'));
    }


    public function edit_event_data(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string|max:255',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validate each image file
    ]);

    $event = Event::findOrFail($id);
    $event->name = $request->input('name');
    $event->date = $request->input('date');
    $event->location = $request->input('location');
    $event->description = $request->input('description');

    // Retrieve previous images
    $previousImages = $request->input('previous_images') ?? [];

    // Handle image updates
    $images = $previousImages; // Start with previous images
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $file) {
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '_' . uniqid() . '.' . $extension;
            $file->move('uploads/events/', $filename); // Move the file to the desired location
            $images[] = $filename; // Add newly uploaded images
        }
    }

    // Update the image column with the combined list of images
    $event->image = implode(',', $images);

    // Update the event
    $event->save();

    // Delete removed images from the server
    $removedImages = array_diff($previousImages, $images);
    foreach ($removedImages as $removedImage) {
        $imagePath = 'uploads/events/' . $removedImage;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    return redirect('all-events')->with('status', 'Event Updated Successfully');
}
public function delete_event($id)
    {
        $events = Event::find($id);
        $destination = 'uploads/events/'.$events->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $events->delete();
        return redirect()->back()->with('status','Event  Deleted Successfully');
    }

}
