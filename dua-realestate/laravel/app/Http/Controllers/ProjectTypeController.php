<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Protype; 
use Illuminate\Support\Facades\File;

class ProjectTypeController extends Controller
{
    // Display all project types
    public function view_project_type()
    {
        $project_types = Protype::join('projects', 'protypes.project_id', '=', 'projects.id')->select('protypes.*', 'projects.name as project_name')
                                ->get();
        
        return view('admin.project-types', compact('project_types'));
    }
    

    // Show form for creating a new project type
    public function add_project_type()
    {
        $projects = Project::all();
        return view('admin.add-project-type', compact('projects'));
    }

    // Store a new project type
    public function add_project_type_data(Request $request)
    {
    

        // Check if a project type already exists for the selected project and type
        if (Protype::where('project_id', $request->input('project_id'))
            ->where('type', $request->input('type'))
            ->exists()) {
            return redirect()->back()->with('error', 'A project type for this project and type already exists.');
        }

        // Create a new instance of the Protype model
        $project_type = new Protype();
        $project_type->project_id = $request->input('project_id'); // Set project ID
        $project_type->type = $request->input('type'); // Set type (Commercial or Residential)
        $project_type->description = $request->input('description');

        // Handle the image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/project_types/'), $filename);
            $project_type->image = $filename;
        }

        // Set the sequence number
        $maxSequence = Protype::max('sequence');
        $project_type->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;

        // Save the new project type
        $project_type->save();

        // Redirect back with a success message
        return redirect()->route('project-type')->with('status', 'Project Type Added Successfully');
    }


    // Show form for editing an existing project type
    public function edit_project_type($id)
    {
        // Fetch the specific project type by ID
        $project_type = Protype::findOrFail($id);
        
        // Fetch all projects to display in the dropdown
        $projects = Project::all(); // Adjust this according to your actual project model
        
        // Pass both the project type and the list of projects to the view
        return view('admin.edit-project-type', compact('project_type', 'projects'));
    }
    

    // Update an existing project type
    public function edit_project_type_data(Request $request, $id)
    {
        // Find the specific project type by ID
        $project_type = Protype::findOrFail($id);

        // Check if another project type exists for the same project and type
        if (Protype::where('project_id', $request->input('project_id'))
            ->where('type', $request->input('type'))
            ->where('id', '!=', $id) // Exclude the current record from the check
            ->exists()) {
            return redirect()->back()->with('error', 'A project type for this project and type already exists.');
        }

        // Update the project type fields from the request
        $project_type->project_id = $request->input('project_id'); // Update project ID
        $project_type->type = $request->input('type'); // Update type
        $project_type->description = $request->input('description');

        // Check if a new image file was uploaded
        if ($request->hasFile('image')) {
            // Delete the old image file if it exists
            $destination = public_path('uploads/project_types/' . $project_type->image);
            if (File::exists($destination)) {
                File::delete($destination);
            }

            // Process the new image file
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/project_types/'), $filename);
            $project_type->image = $filename; // Update the image filename
        }

        // Save the updated project type
        $project_type->save();

        // Redirect back with a success message
        return redirect()->route('project-type')->with('status', 'Project Type Updated Successfully');
    }

    // Delete an existing project type
    public function delete_project_type($id)
    {
        $project_type = Protype::findOrFail($id);
        $destination = public_path('uploads/project_types/' . $project_type->image);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $project_type->delete();

        return redirect()->route('project-type')->with('status', 'Project Type Deleted Successfully');
    }

    // Sort project types based on sequence
    public function sort_project_type(Request $request)
    {
        $project_types = array_filter($request->input('data'), function($value) {
            return !is_null($value) && $value !== '';
        });

        $i = 0;
        foreach ($project_types as $id) {
            $project_type = Protype::find($id);
            if ($project_type) {
                $project_type->sequence = $i;
                $project_type->save();
                $i++;
            }
        }

        return response()->json(['success' => true, 'data' => $project_types]);
    }
}
