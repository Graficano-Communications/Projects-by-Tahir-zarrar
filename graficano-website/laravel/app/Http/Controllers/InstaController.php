<?php

namespace App\Http\Controllers;

use App\Models\Instagram;
use Illuminate\Http\Request;
use Exception;

class InstaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $instagrams = Instagram::all()->sortBy('sequence');
        return view('admin.instagram.index', compact('instagrams'));
    }




    public function create()
    {
        return view('admin.instagram.create');
    }

    public function store(Request $request)
    {


        try {
            $data = $request->all();



            if (!isset($data['name']) || !isset($data['instagram_url'])) {
                throw new Exception("Required data not provided.");
            }

            $instagram = new Instagram;
            $instagram->name = $data['name'];
            $instagram->instagram_url = $data['instagram_url'];


            if ($request->hasFile('image')) {
    $destinationPath = 'images/instagrams/';
    $file = $request->file('image');
    $extension = $file->getClientOriginalExtension(); // Get the original extension
    $name = date('YmdHis', time()) . mt_rand() . '.' . $extension; // Use the original extension
    $file->move($destinationPath, $name);
    $instagram->image = $name;
}


            $max_order = Instagram::max('sequence');
            if ($max_order) {
                $instagram->sequence = ++$max_order;
            } else {
                $instagram->sequence = 01;
            }

            $instagram->save();

            return redirect()->route('instagram.instagram.index')
                ->with('success_message', 'Instagram post was successfully added.');
        } catch (Exception $exception) {
            return back()->withInput()
                ->withErrors(['unexpected_error' => $exception->getMessage()]);
        }
    }



    public function show($id)
    {
        $instagram = Instagram::findOrFail($id);
        return view('admin.instagram.show', compact('instagram'));
    }

    public function edit($id)
    {
        $instagram = Instagram::findOrFail($id);
        return view('admin.instagram.edit', compact('instagram'));
    }

    public function update(Instagram $instagram, Request $request)
    {
        try {
            $data = $request->all();
            if ($request->hasFile('image')) {
                $destinationPath = 'images/instagrams/';
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension(); 
                $name = date('YmdHis', time()) . mt_rand() . $extension;

                // Delete the old image
                if (file_exists($destinationPath . $instagram->image)) {
                    unlink($destinationPath . $instagram->image);
                }

                $file->move($destinationPath, $name);
                $instagram->image = $name;
            }

            $max_order = Instagram::max('sequence');
            if ($max_order) {
                $instagram->sequence = ++$max_order;
            } else {
                $instagram->sequence = 01;
            }

            $instagram->name = $data['name'];
            $instagram->instagram_url = $data['instagram_url'];
            $instagram->update();

            return redirect()->route('instagram.instagram.index')
                ->with('success_message', 'Instagram record was successfully updated.');
        } catch (Exception $exception) {
            return back()->withInput()
                ->withErrors(['unexpected_error' => $exception->getMessage()]);
        }
    }


    public function destroy($id)
    {
        try {
            $instagram = Instagram::findOrFail($id);
            $instagram->delete();

            return redirect()->route('instagram.instagram.index')
                ->with('success_message', 'Instagram record was successfully deleted.');
        } catch (Exception $exception) {
            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'image' => 'required',
        ];

        $data = $request->validate($rules);
        return $data;
    }

    public function sort(Request $request)
    {
        //dd($request->all());
        $instagramPosts = $request->ids; // Get the ids from the request
        $i = 0;

        foreach ($instagramPosts as $id) {
            $instagramPost = Instagram::find($id);
            // dd($instagramPost);

            // Check if the post exists to avoid potential errors
            if ($instagramPost) {
                $instagramPost->sequence = $i;
                $instagramPost->save();
            }

            $i++;
        }

        return response()->json(['status' => 'success']);
    }
}
