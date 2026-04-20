<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
class CategoriesController extends Controller
{
   
        public function index(){
            $category = Category::orderBy('sequence')->get();
            return view('admin.categories',compact('category'));
        }
        public function add_category()
        {
            return view('admin.add-category');
        }
        public function store_category(Request $request)
        {

            // $validatedData = $request->validate([
            //     'name' => 'required|string|max:255',
            //     'banner_image' => 'nullable|varchar',
            // ]);
            // dd($request->all());
    
            $category = new Category;
            $category->name = $request->input('name');
            $category->slug = $request->input('slug');
            $category->description = $request->input('editor1');
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $originalFilename = $file->getClientOriginalName();
                $filename = Str::uuid() . '_' . $originalFilename;
                $file->move('uploads/categories/', $filename);
                $category->image = $filename;
            }
            
            $maxSequence = category::max('sequence');
            $category->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;
            $category->save();
            return redirect()-> route('categories')->with('status', 'Category Added Successfully');
        
        }
        public function edit_category($id)
        {
            $category = Category::find($id);
            return view('admin.edit-category', compact('category'));
        }
        public function update_category(Request $request, $id)
        {
            // $validatedData = $request->validate([
            //     'name' => 'required|string|max:255',
            //     'banner_image' => 'nullable|varchar',
            // ]);

            // dd($request->all());
            $category = Category::find($id);
        
            // Check if the department exists
            if (!$category) {
                return redirect()-> route('Categories')->with('error', 'category not found');
            }
        
            // Update the category's name and password
            $category->name = $request->input('name');
            $category->slug = $request->input('slug');
            $category->description = $request->input('editor1');// Use bcrypt for password encryption
        
            // Handle image upload
            if ($request->hasFile('image')) {
                $destination = 'uploads/categories/' . $category->image;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/categories/', $filename);
                $category->image = $filename;
            }
        
        
            // Save the updated category
            $category->update();
        
            return redirect()-> route('categories')->with('status', 'Category updated successfully');
        }
        public function delete_category($id)
        {
            $category = Category::find($id);
            $destination = 'uploads/categories/'.$category->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $destination = 'uploads/categories/'.$category->banner_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $category->delete();
            return redirect()->back()->with('status','Category Deleted Successfully');
        }
        public function sort_category(Request $request) {
            $categories = array_filter($request->input('data'), function($value) {
                return !is_null($value) && $value !== '';
            });
        
            $i = 0;
            foreach ($categories as $id) {
                $category = Category::find($id);
                if ($category) {
                    $category->sequence = $i;
                    $category->save();
                    $i++;
                }
            }
        
            return response()->json(['success' => true, 'data' => $categories]);
        }
        
}

