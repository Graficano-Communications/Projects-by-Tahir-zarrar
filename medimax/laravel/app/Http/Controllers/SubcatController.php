<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcatController extends Controller
{
    public function index()
    {
        $alertMessage = session('success');
        $subcategories = Subcategory::with('category')->orderBy('sequence')->simplePaginate(20);

        return view('admin.subcat.index', compact('alertMessage', 'subcategories'));
    }



    public function create()
    {
        $categories = Category::all();
        return view('admin.subcat.new', compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'status' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

        ]);

        $category = Category::find($request->input('category_id'));

        $sequence = $category->subcategories()->max('sequence') + 1;

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageDestinationPath = public_path('images/subcategory');
            $uniqueId = rand(100000, 999999);
            $originalImageName = $imageFile->getClientOriginalName();
            $imageName = $uniqueId . '_' . $originalImageName;
            $imageFile->move($imageDestinationPath, $imageName);
        }

        Subcategory::create([
            'category_id' => $category->id,
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'status' => $request->input('status'),
            'sequence' => $sequence,
            'image' => $imageName

        ]);

        return redirect()->route('subcat')->with('success', 'Subcategory created successfully');
    }

    public function edit($id)
    {
        $subcategory = SubCategory::find($id);
        $categories = Category::all(); // Assuming you have a Category model

        return view('admin.subcat.edit', compact('subcategory', 'categories'));
    }

    public function update(Request $request, SubCategory $subcategory)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'status' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageDestinationPath = public_path('images/subcategory');
            $uniqueId = rand(100000, 999999);
            $originalImageName = $imageFile->getClientOriginalName();
            $imageName = $uniqueId . '_' . $originalImageName;
            $imageFile->move($imageDestinationPath, $imageName);


            if ($subcategory->image && file_exists($imageDestinationPath . '/' . $subcategory->image)) {
                unlink($imageDestinationPath . '/' . $subcategory->image);
            }

            $subcategory->update([
                'category_id' => $request->input('category_id'),
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'status' => $request->input('status'),
                'image' => $imageName,
            ]);
        } else {

            $subcategory->update([
                'category_id' => $request->input('category_id'),
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'status' => $request->input('status'),
            ]);
        }

        return redirect()->route('subcat')->with('success', 'Subcategory updated successfully');
    }

    public function destroy($id)
    {
        $subcat = Product::where('sub_category_id', $id)->exists();
        if ($subcat) {
            return redirect()->route('subcat')->with('error', 'Delete all products of this category first');
        } else {
            
            $subcategory = SubCategory::findOrFail($id);
         
            $subcategory->delete();

            return redirect()->route('subcat')->with('success', 'Deleted sub category successfully');
        }
    }

    public function updateSequence(Request $request)
    {

        $banners = $request->data;
        $i = 0;
        foreach ($banners as  $id) {
            $banner = SubCategory::find($id);
            $banner->sequence  = $i;
            $banner->update();
            $i++;
        }

        return response()->json(['message' => 'Sequence updated successfully']);
    }

    public function approve(Request $request, $id)
    {
        $banner = SubCategory::findOrFail($id);

        $request->validate([
            'status' => 'required|string',
        ]);

        $banner->status = $request->input('status');

        $banner->save();

        return redirect()->route('subcat')->with('success', 'SubCategory Updated successfully');
    }

    
}
