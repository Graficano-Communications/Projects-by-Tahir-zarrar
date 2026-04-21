<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DepartmentsController extends Controller
{
    public function index()
    {
        $department = Department::orderBy('sequence')->get();
        return view('admin.departments', compact('department'));
    }
    public function add_department()
    {
        return view('admin.add-department');
    }
    public function store_department(Request $request)
    {
        // dd($request->all());

        $department = new Department;
        $department->name = $request->input('name');
        $department->description = $request->input('description');
        $images = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '_' . uniqid() . '.' . $extension;
                $file->move('uploads/departments/', $filename);
                $images[] = $filename;
            }
            //dd($images);
        }

        // Convert the array of image filenames into a comma-separated string
        $imageString = implode(',', $images);
        //dd($imageString);
        $department->image = $imageString; // Assuming 'images' is the column name where you store the array

        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $originalFilename = $file->getClientOriginalName();
            $filename = Str::uuid() . '_' . $originalFilename;
            $file->move('uploads/departments/', $filename);
            $department->banner_image = $filename;
        }
        $maxSequence = department::max('sequence');
        $department->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;
        $department->save();
        return redirect()->route('admin-departments')->with('status', 'Department Added Successfully');
    }
    public function edit_department($id)
    {
        $department = Department::find($id);
        return view('admin.edit-department', compact('department'));
    }
    public function update_department(Request $request, $id)
    {

        // dd($request->all());
        $department = Department::find($id);

        // Check if the department exists
        if (!$department) {
            return redirect()->route('admin-departments')->with('error', 'Department not found');
        }

        // Update the department's name and password
        $department->name = $request->input('name');
        $department->description = $request->input('editor1'); // Use bcrypt for password encryption

        // Handle image upload
        // Retrieve previous images
        $previousImages = $request->input('previous_images') ?? [];

        // Handle image updates
        $images = $previousImages; // Start with previous images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '_' . uniqid() . '.' . $extension;
                $file->move('uploads/departments/', $filename); // Move the file to the desired location
                $images[] = $filename; // Add newly uploaded images
            }
        }

        // Update the image column with the combined list of images
        $department->image = implode(',', $images);

        // Update the department
        $department->save();

        // Delete removed images from the server
        $removedImages = array_diff($previousImages, $images);
        foreach ($removedImages as $removedImage) {
            $imagePath = 'uploads/departments/' . $removedImage;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Handle PDF upload
        if ($request->hasFile('banner_image')) {
            $destination = 'uploads/departments/' . $department->banner_image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('banner_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/departments/', $filename);
            $department->banner_image = $filename;
        }

        // Save the updated department
        $department->update();

        return redirect()->route('admin-departments')->with('status', 'Department updated successfully');
    }
    public function delete_department($id)
    {
        $department = department::find($id);
        $destination = 'uploads/departments/' . $department->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $destination = 'uploads/departments/' . $department->banner_image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $department->delete();
        return redirect()->back()->with('status', 'Department Deleted Successfully');
    }
    public function sort_department(Request $request)
    {
        $departments = array_filter($request->input('data'), function ($value) {
            return !is_null($value) && $value !== '';
        });

        $i = 0;
        foreach ($departments as $id) {
            $department = Department::find($id);
            if ($department) {
                $department->sequence = $i;
                $department->save();
                $i++;
            }
        }

        return response()->json(['success' => true, 'data' => $departments]);
    }
}
