<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::orderBy('sequence')->get();
        return view('admin.projects', compact('project'));
    }
    public function add_project()
    {
        return view('admin.add-project');
    }
    public function store_project(Request $request)
    {
        $project = new Project();
        $project->name = $request->input('name');
        $project->description = $request->input('editor1');
        
        // Store single project logo
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = Str::uuid() . '_' . $file->getClientOriginalName();
            $file->move('uploads/projects/', $filename);
            $project->image = $filename;
        }
        
        // Store project banner image
        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = Str::uuid() . '_' . $file->getClientOriginalName();
            $file->move('uploads/projects/', $filename);
            $project->banner_image = $filename;
        }
    
        // Store additional project images as an array
        if ($request->hasFile('additional_images')) {
            $additionalImages = [];
            foreach ($request->file('additional_images') as $file) {
                $filename = Str::uuid() . '_' . $file->getClientOriginalName();
                $file->move('uploads/projects/', $filename);
                $additionalImages[] = $filename;  // Add each filename to the array
            }
            $project->additional_images = json_encode($additionalImages);  // Save as JSON
        }
    
        // Set sequence
        $maxSequence = Project::max('sequence');
        $project->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;
    
        $project->save();
    
        return redirect()->route('admin-projects')->with('status', 'Project Added Successfully');
    }
    public function edit_project($id)
    {
        $project = Project::find($id);
        
        // Ensure additional images are correctly formatted
        // If you stored the additional images as a JSON array, you can decode them here
        if ($project) {
            $project->additional_images = json_decode($project->additional_images, true) ?? [];
        }
    
        return view('admin.edit-project', compact('project'));
    }
    
    public function update_project(Request $request, $id)
    {
        $project = Project::find($id);
    
        if (!$project) {
            return redirect()->route('admin-projects')->with('error', 'Project not found');
        }
    
        // Update fields
        $project->name = $request->input('name');
        $project->description = $request->input('editor1');
    
        // Handle main image upload
        if ($request->hasFile('image')) {
            if (!empty($project->image) && File::exists(public_path('uploads/projects/' . $project->image))) {
                File::delete(public_path('uploads/projects/' . $project->image));
            }
            $imageFile = $request->file('image');
            $imageFilename = time() . '_image.' . $imageFile->getClientOriginalExtension();
            $imageFile->move(public_path('uploads/projects/'), $imageFilename);
            $project->image = $imageFilename;
        }
    
        // Handle banner image upload
        if ($request->hasFile('banner_image')) {
            if (!empty($project->banner_image) && File::exists(public_path('uploads/projects/' . $project->banner_image))) {
                File::delete(public_path('uploads/projects/' . $project->banner_image));
            }
            $bannerFile = $request->file('banner_image');
            $bannerFilename = time() . '_banner.' . $bannerFile->getClientOriginalExtension();
            $bannerFile->move(public_path('uploads/projects/'), $bannerFilename);
            $project->banner_image = $bannerFilename;
        }
    
        // Handle additional images upload and removal
        $existingImages = json_decode($project->additional_images, true) ?? [];
    
        // Remove images that are checked for deletion
        if ($request->has('remove_images')) {
            $imagesToRemove = $request->input('remove_images');
            foreach ($imagesToRemove as $image) {
                if (in_array($image, $existingImages) && File::exists(public_path('uploads/projects/' . $image))) {
                    File::delete(public_path('uploads/projects/' . $image));
                }
            }
            // Update the existing images array by removing the selected images
            $existingImages = array_diff($existingImages, $imagesToRemove);
        }
    
        // Handle newly uploaded additional images
        if ($request->hasFile('additional_images')) {
            foreach ($request->file('additional_images') as $additionalImage) {
                $additionalFilename = time() . '_additional_' . uniqid() . '.' . $additionalImage->getClientOriginalExtension();
                $additionalImage->move(public_path('uploads/projects/'), $additionalFilename);
                $existingImages[] = $additionalFilename; // Add new image to array
            }
        }
    
        // Save the updated additional images array
        $project->additional_images = json_encode($existingImages);
        $project->save();
    
        return redirect()->route('admin-projects')->with('status', 'Project updated successfully');
    }
    

    
    public function delete_project($id)
    {
        $project = project::find($id);
        $destination = 'uploads/projects/'.$project->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $destination = 'uploads/projects/'.$project->banner_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $project->delete();
        return redirect()->back()->with('status','Project  Deleted Successfully');
    }
    public function sort_project(Request $request) {
        $projects = array_filter($request->input('data'), function($value) {
            return !is_null($value) && $value !== '';
        });
    
        $i = 0;
        foreach ($projects as $id) {
            $project = Project::find($id);
            if ($project) {
                $project->sequence = $i;
                $project->save();
                $i++;
            }
        }
    
        return response()->json(['success' => true, 'data' => $projects]);
    }
}
