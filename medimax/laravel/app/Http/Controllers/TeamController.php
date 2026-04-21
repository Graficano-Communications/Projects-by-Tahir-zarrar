<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function index()
    {

        $teams = Team::orderBy('sequence')->get();
        $alertMessage = session('success');

        return view('admin.team.index', compact('alertMessage', 'teams'));
    }

    public function create()
    {

        return view('admin.team.new');
    }

    public function edit($id)
    {
        $teams = Team::findOrFail($id);

        return view('admin.team.edit', compact('teams'));
    }

    public function store(Request $request)
    {
        // Debugging: Uncomment if needed
        // dd($request->all());

        // Validate the request


        // Get the latest sequence number
        $latestSequence = Team::max('sequence') ?? 0;

        // Prepare data to be inserted
        $TeamData = [
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'status' => $request->input('status'),
            'sequence' => $latestSequence + 1,
            
        ];

        //dd($TeamData);

        

        if ($request->hasFile('image')) {
            $frontFile = $request->file('image');
            $frontDestinationPath = 'images/service';
            $frontFileName = $frontFile->getClientOriginalName();
            $frontFile->move($frontDestinationPath, $frontFileName);
            $TeamData['image_path'] = 'images/service/' . $frontFileName;
        }

       

        // Create and save the team record
        $team = new Team($TeamData);
        //dd($team);
        $team->save();

        return redirect()->route('teams')->with('success', 'Post added successfully');
    }


    public function destroy($id)
{
    $team = Team::findOrFail($id);

    // Delete the main image if it exists
    if ($team->image_path && file_exists(public_path($team->image_path))) {
        unlink(public_path($team->image_path));
    }

    // Delete the icon image if it exists
    if ($team->icon_path && file_exists(public_path($team->icon_path))) {
        unlink(public_path($team->icon_path));
    }

    // Delete the detail image if it exists
    if ($team->detail_image_path && file_exists(public_path($team->detail_image_path))) {
        unlink(public_path($team->detail_image_path));
    }

    // Delete the benefits image if it exists
    if ($team->bnf_image_path && file_exists(public_path($team->bnf_image_path))) {
        unlink(public_path($team->bnf_image_path));
    }

    // Delete the team record
    $team->delete();

    return redirect()->route('teams')->with('success', 'Post deleted successfully');
}


    public function approve(Request $request, $id)
    {
        $banner = team::findOrFail($id);

        $request->validate([
            'status' => 'required|string',
        ]);

        $banner->status = $request->input('status');

        $banner->save();

        return redirect()->route('teams')->with('success', 'Post Updated successfully');
    }
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $banner = Team::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'status' => 'required|string',
        ]);

        // Update text fields
        $banner->name = $request->input('name');
        $banner->slug = $request->input('slug');
        $banner->status = $request->input('status');
        
        // Update image if a new file is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image from storage if it exists
            if ($banner->image_path && file_exists($banner->image_path)) {
                unlink($banner->image_path);
            }

            // Store the new image
            $frontFile = $request->file('image');
            $frontDestinationPath = 'images/service';
            $frontFileName = $frontFile->getClientOriginalName();
            $frontFile->move($frontDestinationPath, $frontFileName);
            $frontImagePath = 'images/service/' . $frontFileName;

            $banner->image_path = $frontImagePath;
        }


        $banner->save();

        return redirect()->route('teams')->with('success', 'Post Updated successfully');
    }


    public function updateSequence(Request $request)
    {

        $banners = $request->data;
        $i = 0;
        foreach ($banners as  $id) {
            $banner = Team::find($id);
            $banner->sequence  = $i;
            $banner->update();
            $i++;
        }

        return response()->json(['message' => 'Sequence updated successfully']);
    }
}
