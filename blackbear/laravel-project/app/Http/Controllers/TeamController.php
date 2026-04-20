<?php

namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    public function view_team()
    {
        $teams = Team::orderBy('sequence')->get();
        return view('admin.teams', compact('teams'));
    }

    public function add_team()
    {
        return view('admin.add-teams');
    }

    public function add_team_data(Request $request)
    {
        // dd($request->all());
        {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'designation' => 'nullable|string|max:255',
                // 'image' => 'required|varchar',
            ]);
        }

        $team = new Team;
        $team->name = $request->input('name');
        $team->designation = $request->input('designation');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/teams/', $filename);
            $team->image = $filename;
        }
        $maxSequence = Team::max('sequence');
        $team->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;
        $team->save();
        return redirect()->route('teams')->with('status', 'Team Member Added Successfully');
    }

    public function edit_team($id)
    {
        $team = Team::find($id);
        return view('admin.edit-teams', compact('team'));
    }

    public function edit_team_data(Request $request, $id)
    {
        {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'designation' => 'nullable|string|max:255',
                // 'image' => 'required|varchar',
            ]);
        }
        $team = Team::find($id);
        $team->name = $request->input('name');
        $team->designation = $request->input('designation');
        if ($request->hasfile('image'))
        {
            $destination = 'uploads/teams/'.$team->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/teams/', $filename);
            $team->image = $filename;
        }
        $team->update();
        return redirect()->route('teams')->with('status', 'Team Member Updated Successfully');
    }

    public function delete_team($id)
    {
        $team = Team::find($id);
        $destination = 'uploads/teams/'.$team->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $team->delete();
        return redirect()->back()->with('status','Team Member Deleted Successfully');
    }

    public function sort_team(Request $request) {
        // Log incoming request data for debugging
        // Uncomment the next line if needed for debugging purposes
        // dd($request->all());

        $teams = array_filter($request->input('data'), function($value) {
            return !is_null($value) && $value !== '';
        });

        $i = 0;
        foreach ($teams as $id) {
            $team = Team::find($id);
            if ($team) {
                $team->sequence = $i;
                $team->save();
                $i++;
            }
        }

        return response()->json(['success' => true, 'data' => $teams]);
    }
}
