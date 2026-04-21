<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsEventsController extends Controller
{
    public function view_news_event()
    {
        $newsEvents = NewsEvent::orderBy('sequence')->get();
        return view('admin.news', compact('newsEvents'));
    }

    public function add_news_event()
    {
        return view('admin.add-news');
    }

    public function add_news_event_data(Request $request)
    {
        $request->validate([
            'caption' => 'required|string|max:255',
            'date' => 'required|string|max:255', 
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $newsEvent = new NewsEvent();
        $newsEvent->caption = $request->caption;
        $newsEvent->date = $request->date;
        $newsEvent->location = $request->location;
        $newsEvent->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/news/', $filename);
            $newsEvent->image = $filename;
        }

        $newsEvent->sequence = NewsEvent::max('sequence') + 1 ?? 1;
        $newsEvent->save();

        return redirect()->route('news-events')->with('status', 'News/Event added successfully.');
    }

    public function edit_news_event($id)
    {
        $newsEvent = NewsEvent::findOrFail($id);
        return view('admin.edit-news', compact('newsEvent'));
    }

    public function edit_news_event_data(Request $request, $id)
    {
        $request->validate([
            'caption' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $newsEvent = NewsEvent::findOrFail($id);
        $newsEvent->caption = $request->caption;
        $newsEvent->date = $request->date;
        $newsEvent->location = $request->location;
        $newsEvent->description = $request->description;

        if($request->hasfile('image'))
        {
            $destination = 'uploads/banners/'.$newsEvent->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/news/', $filename);
            $newsEvent->image = $filename;
        }

        $newsEvent->save();

        return redirect()->route('news-events')->with('status', 'News/Event updated successfully.');
    }

    public function delete_news_event($id)
    {
        $newsEvent = NewsEvent::findOrFail($id);
        $destination = 'uploads/news/'.$newsEvent->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $newsEvent->delete();

        return redirect()->back()->with('status', 'News/Event deleted successfully.');
    }

    public function sort_news_event(Request $request)
    {
        $items = array_filter($request->input('data'), function ($value) {
            return !is_null($value) && $value !== '';
        });

        foreach ($items as $index => $id) {
            $newsEvent = NewsEvent::find($id);
            if ($newsEvent) {
                $newsEvent->sequence = $index;
                $newsEvent->save();
            }
        }

        return response()->json(['success' => true, 'data' => $items]);
    }
}
