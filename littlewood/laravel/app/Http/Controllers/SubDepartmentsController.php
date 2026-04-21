<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Subdepartment;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class SubDepartmentsController extends Controller
{
    public function index($id){
        $department = Department::find($id);
        $sub_department= Subdepartment::where('department_id', $id)->orderBy('sequence')->get();
        // dd($sub_department);
        return view('admin.sub-departments', compact('department','sub_department'));
    }
    public function add_sub_department($id)
    {
        $department = Department::find($id);
        return view('admin.add-sub-department',compact('department'));
    }
    public function store_sub_department(Request $request)
    {
        // dd($request->all());
        
        $sub_department = new Subdepartment;
        $sub_department->department_id = $request->input('department_id');
        $sub_department->name = $request->input('name');
        $sub_department->description = $request->input('editor1');
        $images = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '_' . uniqid() . '.' . $extension;
                $file->move('uploads/sub_departments/', $filename);
                $images[] = $filename;
            }
            //dd($images);
        }
        
        // Convert the array of image filenames into a comma-separated string
        $imageString = implode(',', $images);
        //dd($imageString);
        $sub_department->image = $imageString; // Assuming 'images' is the column name where you store the array
        $maxSequence = Subdepartment::max('sequence');
        $sub_department->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;
        $sub_department->save();
        return redirect()-> route('admin-sub-departments',['id' => $request->department_id])->with('status', 'Sub Department Added Successfully');
    
    }
    public function edit_sub_department($id)
    {
        $sub_department = Subdepartment::find($id);
        return view('admin.edit-sub-department', compact('sub_department'));
    }
    
    public function update_sub_department(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validate each image file
        ]);
    
        $sub_department = Subdepartment::findOrFail($id);
        $sub_department->name = $request->input('name');
        $sub_department->description = $request->input('editor1');
    
        // Retrieve previous images
        $previousImages = $request->input('previous_images') ?? [];
    
        // Handle image updates
        $images = $previousImages; // Start with previous images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '_' . uniqid() . '.' . $extension;
                $file->move('uploads/sub_departments/', $filename); // Move the file to the desired location
                $images[] = $filename; // Add newly uploaded images
            }
        }
    
        // Update the image column with the combined list of images
        $sub_department->image = implode(',', $images);
    
        // Update the sub_department
        $sub_department->save();
    
        // Delete removed images from the server
        $removedImages = array_diff($previousImages, $images);
        foreach ($removedImages as $removedImage) {
            $imagePath = 'uploads/sub_departments/' . $removedImage;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    
        return redirect()->route('admin-departments')->with('status', 'Sub Department Updated Successfully');
    }
    public function delete_sub_department($id)
    {
        $sub_department = Subdepartment::find($id);
        $destination = 'uploads/sub_departments/'.$sub_department->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $sub_department->delete();
        return redirect()->back()->with('status','Event  Deleted Successfully');
    }
    public function sortSubDepartment(Request $request)
    {
        $subDepartmentIds = $request->input('data');

        // Update sequence based on sorted data
        foreach ($subDepartmentIds as $index => $subDepartmentId) {
            $subDepartment = SubDepartment::find($subDepartmentId);
            if ($subDepartment) {
                $subDepartment->sequence = $index;
                $subDepartment->save();
            }
        }

        return response()->json(['success' => true]);
    }
}

