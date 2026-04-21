<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\ProductVariation;

class ProductsController extends Controller
{
    // Display all categories
    public function index()
    {
        $products = Product::with(['category', 'subCategory'])->get();
        return view('admin.products', compact('products'));
    }

    // Show the form for adding a new product
    public function add_product()
    {
        $categories = Category::orderBy('sequence')->get();
        return view('admin.add-product', compact('categories'));
    }
    

    // Store product data
    public function store_product(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:subcategories,id',
            'product_name' => 'required|string|max:255',
            'product_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'variation_name.*' => 'required|string|max:255',
            'variation_size.*' => 'required|string|max:255',
            'variation_finish.*' => 'required|string|max:255',
            'variation_code.*' => 'required|string|max:255',
        ]);

        try {
            // Handle file upload
            $productImage = $request->file('product_image');
            $productImageName = time() . '_' . $productImage->getClientOriginalName();
            $productImage->move('uploads/products', $productImageName);

            // Save product
            $product = Product::create([
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'product_name' => $request->product_name,
                'product_image' => $productImageName,
            ]);

            // Save variations
            if ($request->has('variation_name')) {
                foreach ($request->variation_name as $key => $value) {
                    ProductVariation::create([
                        'product_id' => $product->id,
                        'name' => $value,
                        'size' => $request->variation_size[$key],
                        'finish' => $request->variation_finish[$key],
                        'code' => $request->variation_code[$key],
                    ]);
                }
            }

            return redirect()->route('admin-products')->with('success', 'Product added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function edit_product($id)
{
    $product = Product::with('variations')->findOrFail($id);
    $categories = Category::all();
    $subcategories = Subcategory::where('categories_id', $product->category_id)->get();

    return view('admin.edit-product', compact('product', 'categories', 'subcategories'));
}
public function update_product(Request $request, $id)
{
    // Validate input data
    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'subcategory_id' => 'required|exists:subcategories,id',
        'product_name' => 'required|string|max:255',
        'product_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        'variation_name.*' => 'required|string|max:255',
        'variation_size.*' => 'required|string|max:255',
        'variation_finish.*' => 'required|string|max:255',
        'variation_code.*' => 'required|string|max:255',
    ]);

    // Find the product to update
    $product = Product::findOrFail($id);

    // Update product details
    $product->category_id = $request->category_id;
    $product->subcategory_id = $request->subcategory_id;
    $product->product_name = $request->product_name;

    // Handle product image upload
    if ($request->hasFile('product_image')) {
        // Delete the old image if it exists
        if ($product->product_image && file_exists('uploads/products/' . $product->product_image)) {
            unlink('uploads/products/' . $product->product_image);
        }

        $file = $request->file('product_image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move('uploads/products', $filename);
        $product->product_image = $filename;
    }

    $product->save();

    // Update product variations
    $product->variations()->delete(); // Clear existing variations

    if ($request->has('variation_name')) {
        foreach ($request->variation_name as $index => $name) {
            $product->variations()->create([
                'name' => $name,
                'size' => $request->variation_size[$index],
                'finish' => $request->variation_finish[$index],
                'code' => $request->variation_code[$index],
            ]);
        }
    }

    // Redirect back with success message
    return redirect()->route('admin-products')->with('success', 'Product updated successfully!');
}
public function delete_product($id)
{
    // Find the product
    $product = Product::findOrFail($id);

    // Delete the product image if it exists
    if ($product->product_image && file_exists('uploads/products/' . $product->product_image)) {
        unlink('uploads/products/' . $product->product_image);
    }

    // Delete associated variations
    $product->variations()->delete();

    // Delete the product itself
    $product->delete();

    // Redirect back with success message
    return redirect()->route('admin-products')->with('success', 'Product deleted successfully!');
}



    // Fetch subcategories based on category
    public function getSubcategories(Request $request)
    {
        // Validate the category_id input
        $request->validate([
            'category_id' => 'required|exists:categories,id',
        ]);

        // Fetch subcategories based on category_id
        $subcategories = Subcategory::where('categories_id', $request->category_id)->get();

        // Return the data as JSON
        return response()->json($subcategories);
    }
}
