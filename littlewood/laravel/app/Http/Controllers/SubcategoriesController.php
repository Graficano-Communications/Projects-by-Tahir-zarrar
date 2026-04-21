<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class SubcategoriesController extends Controller
{
    public function index($id){
        $category = Category::find($id);
        $sub_category= Subcategory::where('categories_id', $id)->orderBy('sequence')->get();
        // dd($sub_category);
        return view('admin.sub-categories', compact('category','sub_category'));
        // return view('admin.sub-categories', compact('category'));
    }
    public function add_sub_category($id)
    {
        $category = Category::find($id);
        return view('admin.add-sub-category',compact('category'));
    }
    public function getSubcategories(Request $request)
    {
        $categoryId = $request->input('category_id');
        
        // Fetch subcategories based on the selected category ID
        $subcategories = Subcategory::where('categories_id', $categoryId)->get();

        // Return the subcategories as JSON response
        return response()->json($subcategories);
    }
    public function store_sub_category(Request $request)
    {
        //dd($request->all());
        
        $sub_category = new Subcategory;
        $sub_category->categories_id = $request->input('category_id');
        $sub_category->name = $request->input('name');
        $sub_category->description = $request->input('editor1');
        if ($request->hasFile('image')) {
            //dd('hwlo');
            $file = $request->file('image');
            $originalFilename = $file->getClientOriginalName();
            $filename = Str::uuid() . '_' . $originalFilename;
            $file->move('uploads/sub-categories/', $filename);
            $sub_category->image = $filename;
        }
        $maxSequence = Subcategory::max('sequence');
        $sub_category->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;
        $sub_category->save();
        return redirect()-> route('sub-categories',['id' => $request->category_id])->with('status', 'Sub Category Added Successfully');
    
    }
    public function edit_sub_category($id)
    {
        $sub_category = Subcategory::find($id);
        return view('admin.edit-sub-category', compact('sub_category'));
    }
    
    public function update_sub_category(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validate each image file
        ]);
    
        $sub_category = Subcategory::findOrFail($id);
        $sub_category->name = $request->input('name');
        $sub_category->description = $request->input('editor1');
    
       // Handle image upload
       if ($request->hasFile('image')) {
        $destination = 'uploads/sub-categories/' . $sub_category->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/sub-categories/', $filename);
        $sub_category->image = $filename;
    }
    
        // Update the sub_category
        $sub_category->update();
    
        
    
        return redirect()->route('categories')->with('status', 'Sub Category Updated Successfully');
    }
    public function delete_sub_category($id)
    {
        $sub_category = Subcategory::find($id);
        $destination = 'uploads/sub_categorys/'.$sub_category->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $sub_category->delete();
        return redirect()->back()->with('status','Sub Category  Deleted Successfully');
    }
    public function sortSubCategory(Request $request)
    {
        $subCategoryIds = $request->input('data');

        // Update sequence based on sorted data
        foreach ($subCategoryIds as $index => $subCategoryId) {
            $subCategory = SubCategory::find($subCategoryId);
            if ($subCategory) {
                $subCategory->sequence = $index;
                $subCategory->save();
            }
        }

        return response()->json(['success' => true]);
    }
}
