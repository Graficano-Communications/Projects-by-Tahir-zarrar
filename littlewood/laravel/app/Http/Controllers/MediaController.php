<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MediaLink;

class MediaController extends Controller
{
    public function index()
    {
        $video = MediaLink::orderBy('sequence')->get();
        return view('frontend.media',compact('video'));
    }
    public function view_media()
    {
        $media = MediaLink::orderBy('sequence')->get();
        return view('admin.media' ,compact('media'));
    }

    public function add_media()
    {
        return view('admin.add-media');
    }
    public function add_media_data(Request $request)
    {
        // dd($request->all());
        $media = new MediaLink();
        $media->link = $request->input('link');
        $maxSequence = MediaLink::max('sequence');
        $media->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;

        $media->save();
        return redirect()->route('media')->with('status', 'Media Added Successfully');
    }
    public function edit_media($id)
    {
        $media = MediaLink::find($id);
        return view('admin.edit-media', compact('media'));
    }
    public function edit_media_data(Request $request, $id)
    {
        $media = MediaLink::find($id);
        $media->link = $request->input('link');
        $media->update();
        return redirect()->route('media')->with('status', 'Media Updated Successfully');
    }
    public function delete_media($id)
    {
        $media = MediaLink::find($id);
        $media->delete();
        return redirect()->back()->with('status','Media Deleted Successfully');
    }

    public function sort_media(Request $request) {
        // dd($request->all());
    
        $media = array_filter($request->input('data'), function($value) {
            return !is_null($value) && $value !== '';
        });
    
        $i = 0;
        foreach ($media as $id) {
            $media = MediaLink::find($id);
            if ($media) {
                $media->sequence = $i;
                $media->save();
                $i++;
            }
        }
    
        return response()->json(['success' => true, 'data' => $media]);
    }

}
