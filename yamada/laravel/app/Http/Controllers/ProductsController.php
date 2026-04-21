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
        // dd($request->all());
        $imagePaths = []; // Array to store image paths
    
        // Handle multiple file uploads
        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move('images/products', $imageName);
                $imagePaths[] = $imageName; // Store the image name in the array
            }
        }
    
        // Save product
        $product = Product::create([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'product_name' => $request->product_name,
            'slug' => $request->slug,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'product_description' => $request->product_description,
            // Ensure 'yes' is mapped to 1 and 'no' is mapped to 0
            'is_featured' => ($request->is_featured === 'yes') ? 1 : 0,
            'product_images' => json_encode($imagePaths),
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
    // dd($request->all());
    // Update product details
    $product->category_id = $request->category_id;
    $product->subcategory_id = $request->subcategory_id;
    $product->product_name = $request->product_name;
    $product->slug = $request->slug;
    $product->meta_title = $request->meta_title;
    $product->meta_description = $request->meta_description;
    $product->product_description = $request->product_description;
    $product->is_featured = $request->is_featured === 'yes' ? 1 : 0;

    if ($request->has('removed_images')) {
        // Get the list of removed images from the hidden input field
        $removedImages = json_decode($request->input('removed_images'), true);
        
        // Loop through the images to remove them
        foreach ($removedImages as $image) {
            $imagePath = ('images/products/' . $image);

            // Check if the file exists before deleting it
            if (($imagePath)) {
                unlink($imagePath); // Delete the image file from the server
            }
        }

        // Update the product's image field if necessary
        // Assuming the images are stored as a JSON array in the 'product_images' field
        $productImages = json_decode($product->product_images, true);
        
        // Remove the images that were deleted from the 'product_images' list
        $productImages = array_diff($productImages, $removedImages);

        // Save the updated list of images to the product
        $product->product_images = json_encode(array_values($productImages));
    }

    // Handle any new image uploads if necessary
    if ($request->hasFile('product_images')) {
        $newImages = [];

        // Process new images
        foreach ($request->file('product_images') as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move('images/products', $filename);
            $newImages[] = $filename;
        }

        // Merge new images with existing ones
        $productImages = json_decode($product->product_images, true);
        $productImages = array_merge($productImages, $newImages);

        // Save the updated list of images
        $product->product_images = json_encode(array_values($productImages));
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
    if ($product->product_image && file_exists('images/products/' . $product->product_image)) {
        unlink('images/products/' . $product->product_image);
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
