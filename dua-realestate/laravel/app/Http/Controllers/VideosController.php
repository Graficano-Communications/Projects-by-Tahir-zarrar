<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function view_video()
    {
        $videos = Video::orderBy('sequence')->get();
        return view('admin.videos', compact('videos'));
    }

    public function add_video()
    {
        return view('admin.add-videos');
    }

    public function add_video_data(Request $request)
    {
        $video = new Video;
        $video->caption = $request->input('caption');
        $video->link = $request->input('link');
        $maxSequence = Video::max('sequence');
        $video->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;
        $video->save();

        return redirect()->route('videos')->with('status', 'Video Added Successfully');
    }

    public function edit_video($id)
    {
        $video = Video::find($id);
        return view('admin.edit-videos', compact('video'));
    }

    public function edit_video_data(Request $request, $id)
    {
        $video = Video::find($id);
        $video->caption = $request->input('caption');
        $video->link = $request->input('link');
        $video->update();

        return redirect()->route('videos')->with('status', 'Video Updated Successfully');
    }

    public function delete_video($id)
    {
        $video = Video::find($id);
        $video->delete();

        return redirect()->back()->with('status', 'Video Deleted Successfully');
    }

    public function sort_video(Request $request)
    {
        $videos = array_filter($request->input('data'), function ($value) {
            return !is_null($value) && $value !== '';
        });

        $i = 0;
        foreach ($videos as $id) {
            $video = Video::find($id);
            if ($video) {
                $video->sequence = $i;
                $video->save();
                $i++;
            }
        }

        return response()->json(['success' => true, 'data' => $videos]);
    }
}
