<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('sequence')->simplePaginate(20);;
        $alertMessage = session('success');

        return view('admin.categories.index', compact('categories', 'alertMessage'));
    }

    public function create()
    {

        return view('admin.categories.new');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Handle image upload
        // $imagePath = $request->file('image')->store('categories', 'public');

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageDestinationPath = public_path('images/categories');
            $uniqueId = rand(100000, 999999);
            $originalImageName = $imageFile->getClientOriginalName();
            $imageName = $uniqueId . '_' . $originalImageName;
            $imageFile->move($imageDestinationPath, $imageName);
        }


        // Create a new category
        $category = Category::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'status' => $request->input('status'),
            'image' => $imageName,
            'sequence' => Category::max('sequence') + 1,
        ]);

        return redirect()->route('categories')->with('success', 'Category added successfully');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $category = Category::findOrFail($id);

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->status = $request->input('status');
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($category->image && file_exists(public_path($category->image))) {
                unlink(public_path($category->image));
            }

            // Upload new image
            $imageFile = $request->file('image');
            $imageDestinationPath = public_path('images/categories');
            $uniqueId = rand(100000, 999999);
            $originalImageName = $imageFile->getClientOriginalName();
            $imageName = $uniqueId . '_' . $originalImageName;
            $imageFile->move($imageDestinationPath, $imageName);
            $category->image =  $imageName;
        }

        $category->save();


        return redirect()->route('categories')->with('success', 'Category updated successfully');
    }
    public function destroy($id)
    {
        $subcat = subcategory::where('category_id', $id)->exists();
        if ($subcat) {
            return redirect()->route('categories')->with('error', 'Delete all sub Category of this category first');
        } else {
            $category = category::find($id);
            // Storage::delete('public/' . $category->image);
            $category->delete();

            return redirect()->route('categories')->with('success', 'Category deleted successfully');
        }
    }
    public function destroyy($id)
    {

        $category = Category::findOrFail($id);
        $subcat = Subcategory::find($id);


        if ($subcat) {
            return redirect()->route('categories')->with('error', 'sub Category deleted first');
        }
        //  Storage::delete('public/' . $category->image);

        $category->delete();

        return redirect()->route('categories')->with('success', 'Category deleted successfully');
    }

    public function updateSequence(Request $request)
    {

        $banners = $request->data;
        $i = 0;
        foreach ($banners as  $id) {
            $banner = Category::find($id);
            $banner->sequence  = $i;
            $banner->update();
            $i++;
        }

        return response()->json(['message' => 'Sequence updated successfully']);
    }
    public function approve(Request $request, $id)
    {
        $banner = Category::findOrFail($id);

        $request->validate([
            'status' => 'required|string',
        ]);

        $banner->status = $request->input('status');

        $banner->save();

        return redirect()->route('categories')->with('success', 'Category Updated successfully');
    }
}
