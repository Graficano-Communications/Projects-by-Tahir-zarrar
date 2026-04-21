<?php

namespace App\Http\Controllers;

use App\Instagram;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instagramWidgets = Instagram::orderBy('sequence', 'asc')->get();
        return view('admin.instagram.index', compact('instagramWidgets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.instagram.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $sequence = Instagram::max('sequence') + 1;

        $file = $request->file('image');
        $destinationPath = 'images/instagram';
        $imagePath = $file->getClientOriginalName();
        $file->move($destinationPath,$file->getClientOriginalName());


        Instagram::create([
            'alt_text' => $request->alt,
            'image' => $imagePath,
            'link' => $request->url,
            'sequence' => $sequence,
        ]);

        return redirect()->route('instagram.index')->with('success', 'Widget added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Instagram::findOrFail($id);
        return view('admin.instagram.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $item = Instagram::findOrFail($id);

    // Update the URL and Alt-text
    $item->link = $request->input('url');
    $item->alt_text = $request->input('alt');

    // Handle the image upload if a new image is provided
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $destinationPath = 'images/instagram';
        $imagePath = $file->getClientOriginalName();
        $file->move($destinationPath, $imagePath);

        // Update the image field in the database
        $item->image = $imagePath;
    }

    $item->save();

    return redirect()->route('instagram.index')->with('success', 'Widget updated successfully');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $item = Instagram::findOrFail($id);
        $item->delete();

        return redirect()->route('instagram.index')->with('success', 'Widget deleted successfully');
    }

    public function sort_insta(Request $request){
        // return $request;
        $banners = $request->data;
        $i = 0;
        foreach ($banners as  $id) {
            $banner = Instagram::find($id);
            $banner->sequence  = $i;
            $banner->update();
            $i++;
        }
    }
}
