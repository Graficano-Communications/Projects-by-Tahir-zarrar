<?php

namespace App\Http\Controllers;

use App\NewsBanner;
use Illuminate\Http\Request;
// You might also want to use the NewsBanner model, depending on your setup.
// use App\NewsBanner; 

class NewsBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
{
    // Fetch all news banners
    $newsBanners = NewsBanner::all();

    $destinationPath = 'images/news_banners';

    return view('admin.news.index', [
        'newsBanners' => $newsBanners,
        'destinationPath' => $destinationPath
    ]);
}

public function edit($id)
{
    $newsBanner = NewsBanner::findOrFail($id);
    $destinationPath = 'images/news_banners';

    return view('admin.news.edit', ['newsBanner' => $newsBanner, 'destinationPath' => $destinationPath]);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return the create view for news banners
        return view('admin.news.create');
    }
    
    public function store(Request $request)
{
    // Assuming your NewsBanner model is called 'NewsBanner'
    $newsBanner = new NewsBanner;

    $newsBanner->title = $request->title;
    $newsBanner->description = strip_tags($validatedData['description']); // Adjust the allowable tags as needed.


    // If you have a sequence logic similar to banners
    $max_order = NewsBanner::max('sequence');
    if($max_order){
        $newsBanner->sequence = ++$max_order;
    }
    else{
        $newsBanner->sequence = 01;
    }

    // Get image
    $file = $request->file('image');
    $destinationPath = 'images/news_banners'; // Assuming you have a folder for news banners
    $newsBanner->image = $file->getClientOriginalName();

    // Check if file with the same name exists and append a unique ID if it does.
    while (file_exists($destinationPath . '/' . $newsBanner->image)) {
        $newsBanner->image = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
    }

    $file->move($destinationPath, $newsBanner->image);
    $newsBanner->save();
      
    return redirect()->route('admin.news.index')->with('success', 'News Banner Created Successfully!');
}

public function sort(Request $request)
{
    $sortedIDs = $request->input('data'); // This is an array of IDs in their new order

    foreach ($sortedIDs as $order => $id) {
        NewsBanner::where('id', $id)->update(['sequence' => $order]);
    }

    return response()->json(['success' => true]);
}

public function destroy($id)
{
    try {
        // Find the banner by its ID
        $newsBanner = NewsBanner::findOrFail($id);

        // If you're storing images, you may want to delete the associated file as well.
        if (file_exists(public_path($newsBanner->image))) {
            unlink(public_path($newsBanner->image));
        }

        // Delete the record from the database
        $newsBanner->delete();

        // Redirect back with a success message
        return redirect()->route('admin.news.index')->with('success', 'News Banner deleted successfully!');
    } catch (\Exception $e) {
        // In case of any exceptions, redirect back with an error message
        return redirect()->route('admin.news.index')->with('error', 'Failed to delete News Banner. Error: ' . $e->getMessage());
    }
}

public function update(Request $request, $id)
{
    // First, validate the incoming data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'sometimes|file|image|max:5000', // optional, only if provided, and it should be an image (max 5MB)
    ]);

    // Retrieve the existing news banner
    $newsBanner = NewsBanner::findOrFail($id);

    // Update the attributes
    $newsBanner->title = $validatedData['title'];
    $newsBanner->description = strip_tags($validatedData['description']);

    // If an image is provided, store it and update the image attribute
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if (file_exists(public_path($newsBanner->image))) {
            unlink(public_path($newsBanner->image));
        }

        $destinationPath = 'images/news_banners';
        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();

        // Check if file with the same name exists and append a unique ID if it does.
        while (file_exists($destinationPath . '/' . $imageName)) {
            $imageName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
        }

        $file->move($destinationPath, $imageName);
        $newsBanner->image = $imageName;
    }

    // Save the updated news banner
    $newsBanner->save();

    // Redirect back to the index with a success message
    return redirect()->route('admin.news.index')->with('success', 'News Banner updated successfully!');
}


}
