<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Exception;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::paginate(25);

        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        // Create a new instance of the Banner model
        $banners = new Banner();

        // Pass the $banners variable to the view
        return view('admin.banners.create', compact('banners'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string',
            'url' => 'nullable|string',
        ]);



        // Get the maximum sequence value
        $max_order = Banner::max('sequence');

        // Create a new Banner instance
        $banner = new Banner;

        // Assign sequence value
        if ($max_order) {
            $banner->sequence = ++$max_order;
        } else {
            $banner->sequence = 1;
        }

        // Fill the Banner instance with request data and save it
        $banner->title = $request->title;
        $banner->url = $request->url;
        $destinationPath = 'images/banners/';

        $file = $request->file('image');

        $name = date('YmdHis', time()) . mt_rand() . '.png';
        $banner->image = $name;
        $file->move($destinationPath, $name);

        $banner->save();

        // Return a success message and redirect
        return redirect()->route('banner.banner.index')
            ->with('success_message', 'Banner was successfully added.');
    }


    public function destroy($id)
    {
        try {
            $banner = Banner::findOrFail($id);
            $banner->delete();

            return redirect()->route('banner.banner.index')
                ->with('success_message', 'Event was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    public function edit($id)
    {
        $banners = banner::findOrFail($id);



        return view('admin.banners.edit', compact('banners'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string',
            'url' => 'nullable|string',
            
        ]);

        // Find the banner by its ID
        $banner = Banner::findOrFail($id);

        // Update the banner attributes with the request data
        $banner->title = $request->title;
        $banner->url = $request->url;

        // If an image is uploaded, update the image attribute
        if ($request->hasFile('image')) {


            // Store the new image
            $imageName = date('YmdHis', time()) . mt_rand() . '.png';
            $request->file('image')->move('images/banners', $imageName);
            $banner->image = $imageName;
        }

        // Save the updated banner
        $banner->save();

        // Redirect back to the index page with a success message
        return redirect()->route('banner.banner.index')
            ->with('success_message', 'Banner was successfully updated.');
    }

    // public function sort_banners(Request $request){
    //     $banner = $request->data;
    //     $i = 0;
    //     foreach ($banner as  $id) {
    //         $banner = banner::find($id);
    //         $banner->sequence  = $i;
    //         $banner->update();
    //         $i++;
    //     }
    // }

    public function sort_banners(Request $request)
    {
        //dd($request->all());
        $banners = $request->ids; // Get the ids from the request
        $i = 0;

        foreach ($banners as $id) {
            $banner = banner::find($id); 
            // dd($banner);

            // Check if the post exists to avoid potential errors
            if ($banner) {
                $banner->sequence = $i;
                $banner->save();
            }

            $i++;
        }

        return response()->json(['status' => 'success']);
    }
}
