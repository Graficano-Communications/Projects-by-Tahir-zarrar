<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all()->sortBy('sequence');
        return view('admin.team.teams', compact("teams"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $team = new Team;

        $team->name = $request->name;
        $team->designation = $request->designation;

        $max_order = Team::max('sequence');
        if ($max_order) {
            $team->sequence = ++$max_order;
        } else {
            $team->sequence = 1;
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'images';
            $team->image = $file->getClientOriginalName();
            $file->move($destinationPath, $file->getClientOriginalName());
        }

        $team->save();

        return redirect()->route('our-team.index')->with('success','Team member created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $team = Team::where('id', $id)->first();
        return view('admin.team.edit', compact("team"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $team = Team::find($id);

        $team->name = $request->name;
        $team->designation = $request->designation;

        $file = $request->file('image');
        if (empty($file)) {
            $team->image = $request->old_img;
        } else {
            $destinationPath = 'images';
            $team->image = $file->getClientOriginalName();
            $file->move($destinationPath, $file->getClientOriginalName());
        }

        $team->update();

        return redirect()->route('our-team.index')->with('success','Team member updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
        return back()->with('success','Team member deleted successfully!');
    }

    /**
     * Sort Team Members
     */
    public function sort_team(Request $request)
    {
        $teams = $request->data;
        $i = 0;
        foreach ($teams as $id) {
            $team = Team::find($id);
            $team->sequence = $i;
            $team->update();
            $i++;
        }
    }
}
