<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
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
        $departments = Department::all()->sortBy('sequence');
        return view('admin.department.departments', compact("departments"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $department = new Department();
        $department->name = $request->name;
        $department->description = $request->description;

        $max_order = Department::max('sequence');
        $department->sequence = $max_order ? $max_order + 1 : 1;

        // Handle multiple images upload
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move('images/departments', $filename); // 👈 direct move to public/images/departments
                $imagePaths[] = $filename;
            }
        }

        $department->images = json_encode($imagePaths);
        $department->save();

        return redirect()->route('our-departments.index')->with('success','Department created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('admin.department.edit', compact("department"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $department = Department::findOrFail($id);

        $department->name = $request->name;
        $department->description = $request->description;

        // Old images from DB
        $oldImages = $department->images ? json_decode($department->images, true) : [];

        // Remove selected images
        if ($request->has('remove_images')) {
            foreach ($request->remove_images as $remove) {
                if (($key = array_search($remove, $oldImages)) !== false) {
                    unset($oldImages[$key]);
                    $filePath = public_path('images/departments/' . $remove);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
            }
        }

        // Add new images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move('images/departments', $filename); // 👈 direct move
                $oldImages[] = $filename;
            }
        }

        $department->images = json_encode(array_values($oldImages));
        $department->save();

        return redirect()->route('our-departments.index')->with('success','Department updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $department = Department::findOrFail($id);

        // delete images from server
        if ($department->images) {
            foreach (json_decode($department->images, true) as $img) {
                $filePath = public_path('images/departments/' . $img);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        }

        $department->delete();
        return back()->with('success','Department deleted successfully!');
    }

    /**
     * Sort Departments
     */
    public function sort_department(Request $request)
    {
        $departments = $request->data;
        $i = 0;
        foreach ($departments as $id) {
            $department = Department::find($id);
            $department->sequence = $i;
            $department->update();
            $i++;
        }
    }
}
