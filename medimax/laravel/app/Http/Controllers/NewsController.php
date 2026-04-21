<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {

        $news = News::orderBy('sequence')->get();
        $alertMessage = session('success');

        return view('admin.news.index', compact('news', 'alertMessage'));
    }

    public function create()
    {

        return view('admin.news.new');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'status' => 'required|string',
            'front_image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $latestSequence = News::max('sequence') ?? 0;
        $news = News::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'sequence' => $latestSequence + 1,
            'status' => $request->input('status'),

        ]);

        if ($request->hasFile('front_image')) {
            foreach ($request->file('front_image') as $image) {
                $frontDestinationPath = public_path('images/news');
                $frontFileName = $image->getClientOriginalName();
                $image->move($frontDestinationPath, $frontFileName);
                $frontImagePath = 'images/news/' . $frontFileName;

                $news->images()->create([
                    'path' => $frontImagePath,
                ]);
            }
        }


       

        return redirect()->route('News')->with('success', 'News added successfully');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);

        // Delete the news images
        foreach ($news->images as $image) {
            $publicImagePath = public_path($image->path);

            if (file_exists($publicImagePath)) {
                unlink($publicImagePath);
            }

            $image->delete(); // Delete the image record from the database
        }

        // Delete the news entry
        $news->delete();

        return redirect()->route('News')->with('success', 'News deleted successfully');
    }


    public function edit($id)
    {
        $news = News::findOrFail($id);

        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'status' => 'required|string',
            'front_image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update news details
        $news->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'status' => $request->input('status'),
        ]);

        // Handle images
        if ($request->hasFile('front_image')) {
            foreach ($request->file('front_image') as $index => $frontImage) {
                $frontDestinationPath = public_path('images/news');
                $frontFileName = $frontImage->getClientOriginalName();
                $frontImage->move($frontDestinationPath, $frontFileName);
                $frontImagePath = 'images/news/' . $frontFileName;

                // Update existing image if it exists, otherwise create a new one
                $newsImage = Image::updateOrCreate(
                    ['news_id' => $news->id, 'sequence' => $index + 1],
                    ['path' => $frontImagePath]
                );
            }
        }

        return redirect()->route('News')->with('success', 'News updated successfully');
    }


    public function updateSequence(Request $request)
    {

        $banners = $request->data;
        $i = 0;
        foreach ($banners as  $id) {
            $banner = News::find($id);
            $banner->sequence  = $i;
            $banner->update();
            $i++;
        }

        return response()->json(['message' => 'Sequence updated successfully']);
    }
    public function approve(Request $request, $id)
    {
        $banner = News::findOrFail($id);

        $request->validate([
            'status' => 'required|string',
        ]);

        $banner->status = $request->input('status');

        $banner->save();

        return redirect()->route('News')->with('success', 'News Event Updated successfully');
    }
}
