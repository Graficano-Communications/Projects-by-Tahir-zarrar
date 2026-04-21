<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Exception;

class TeamMemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $teamMembers = TeamMember::all()->sortBy('sequence');
        return view('admin.team.index', ['teamMembers' => $teamMembers]);
    }


    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();

            // Check required data
            if (!isset($data['name']) || !isset($data['position'])) {
                throw new Exception("Required data not provided.");
            }

            $teamMember = new TeamMember;
            $teamMember->name = $data['name'];
            $teamMember->position = $data['position'];

            if ($request->has('rating')) {
                $teamMember->rating = $request->input('rating');
            }
            if ($request->has('testimonial')) {
                $teamMember->testimonial = $request->input('testimonial');
            }


            // Handle the image upload if provided
            if ($request->hasFile('image_path')) {
                $destinationPath = 'images/team/';
                $file = $request->file('image_path');
                $name = date('YmdHis', time()) . mt_rand() . '.png';
                $file->move($destinationPath, $name);
                $teamMember->image_path = $name;
            }

            $max_order = TeamMember::max('sequence');
            if($max_order){$teamMember->sequence = ++$max_order;}
            else{$teamMember->sequence = 01;}

            $teamMember->save();

            return redirect()->route('teams.index')
                ->with('success_message', 'Team member was successfully added.');
        } catch (Exception $exception) {
            return back()->withInput()
                ->withErrors(['unexpected_error' => $exception->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $teamMember = TeamMember::findOrFail($id);
            $teamMember->delete();

            return redirect()->route('teams.index')
                ->with('success_message', 'Team member was successfully deleted.');
        } catch (Exception $exception) {
            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    public function edit($id)
    {
        $teamMember = TeamMember::findOrFail($id);
        return view('admin.team.edit', ['teamMember' => $teamMember]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
       

        $teamMember = TeamMember::findOrFail($id);


        $teamMember->name = $request->input('name');
        $teamMember->position = $request->input('position');

        if ($request->has('rating')) {
            $teamMember->rating = $request->input('rating');
        }
        if ($request->has('testimonial')) {
            $teamMember->testimonial = $request->input('testimonial');
        }
        if ($request->has('featured')) {
        $teamMember->featured = $request->input('featured');
    }


        if ($request->hasFile('image_path')) {
            $destinationPath = 'images/team/';
            $file = $request->file('image_path');
            $name = date('YmdHis', time()) . mt_rand() . '.png';
            $file->move($destinationPath, $name);
            $teamMember->image_path = $name;
        }
        $max_order = TeamMember::max('sequence');
        if($max_order){$teamMember->sequence = ++$max_order;}
        else{$teamMember->sequence = 01;}

        $teamMember->save();

        return redirect()->route('teams.index')
            ->with('success_message', 'Team member was successfully updated.');
    }
    public function sort(Request $request)
    {
        //dd($request->all());
        $teamMembers = $request->ids; // Get the ids from the request
        $i = 0;

        foreach ($teamMembers as $id) {
            $teamMember = TeamMember::find($id); 
            // dd($instagramPost);

            // Check if the post exists to avoid potential errors
            if ($teamMember) {
                $teamMember->sequence = $i;
                $teamMember->save();
            }

            $i++;
        }

        return response()->json(['status' => 'success']);
    }
}
