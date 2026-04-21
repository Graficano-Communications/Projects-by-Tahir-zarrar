<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Subcategory;
use App\Models\product_reviews;
use App\Models\ProductVariation;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $alertMessage = session('success');
        // $products = Product::orderBy('sequence')->simplePaginate(15);
        $products = Product::with('images')->orderBy('created_at', 'desc')->simplePaginate(15);

        // $Category = Category::orderBy('sequence')->with('subcategories')->get();
        $Category = Category::select('id', 'name')
            ->orderBy('sequence')
            ->with(['subcategories' => function ($query) {
                $query->select('id', 'name', 'category_id');
            }])
            ->get();

        return view('admin.products.index', compact('products', 'Category', 'alertMessage'));
    }

    public function showVariations($productId)
    {
        // Fetch the product with its variations
        $variations = Product::with('variations')->findOrFail($productId);


        // Pass the product and its variations to the view
        return view('admin.products.view', compact('variations'));
    }

    public function edit_variation(ProductVariation $variation)
    {
        return view('variations.edit', compact('variation'));
    }

    public function destroy_variation(ProductVariation $variation)
    {
        $variation->delete();
        return redirect()->back()->with('success', 'Variation deleted successfully.');
    }

    public function sub_category_products(Request $request, $cat_id, $id)
    {
        $alertMessage = session('success');
        $products = Product::where('sub_category_id', $id)->orderBy('sequence')->simplePaginate(15);

        $Category = Category::orderBy('sequence')->with('subcategories')->get();

        return view('admin.products.index', compact('products', 'Category', 'alertMessage'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.new', compact('categories'));
    }

    public function getSubcategories($category)
    {
        $subcategories = Subcategory::where('category_id', $category)->get();
        return response()->json($subcategories);
    }

    public function store(Request $request)
    {

        $product = Product::create([
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'name' => $request->name,
            'pcode' => $request->pcode,
            'description' => $request->editor1,
            'status' => $request->status,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_tags' => $request->meta_tags,

            'sequence' => Product::max('sequence') + 1,

        ]);


        if ($request->has('size')) {
            foreach ($request->size as $index => $size) {

                $variationImageName = null;
                if ($request->hasFile('additional_image.' . $index)) {
                    $imageFile = $request->file('additional_image.' . $index);
                    $imageDestinationPath = public_path('images/products');
                    $uniqueId = rand(100000, 999999);
                    $originalImageName = $imageFile->getClientOriginalName();
                    $variationImageName = $uniqueId . '_' . $originalImageName;
                    $imageFile->move($imageDestinationPath, $variationImageName);
                }

                $product->variations()->create([
                    'image' => $variationImageName,
                    'size' => $size,
                    'finish' => $request->finish[$index] ?? null,
                    'code' => $request->code[$index] ?? null,
                ]);
            }
        }


        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imageFile) {
                $imageDestinationPath = public_path('images/products');
                $uniqueId = rand(100000, 999999);
                $originalImageName = $imageFile->getClientOriginalName();
                $imageName = $uniqueId . '_' . $originalImageName;
                $imageFile->move($imageDestinationPath, $imageName);

                $product->images()->create([
                    'image_path' => $imageName,
                ]);
            }
        }

        return redirect()->route('productss')->with('success', 'Product created successfully.');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            // Use storage_path to get the full path in the storage directory
            $filePath = storage_path('app/public/product_images/' . $fileName);

            $request->file('upload')->move(storage_path('app/public/product_images/'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/product_images/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
    private function uploadImages($images)
    {
        $imagePaths = [];

        foreach ($images as $image) {
            $imagePath = $image->store('production_images', 'public');
            $imagePaths[] = $imagePath;
        }

        return $imagePaths;
    }

    public function destroy(Product $product)
    {

        foreach ($product->images as $image) {
            Storage::delete("public/" . $image->image_path);
            $image->delete();
        }

        $product->delete();

        return redirect()->route('productss')->with('success', 'Product deleted successfully');
    }

    public function view(Product $product)
    {
        // Eager load related data: images, subCategory, and category
        $product->load('images', 'subCategory.category');

        // Pass the product and related data to the view
        $product_reviews = product_reviews::where('product_id', $product->id)->simplePaginate(15);

        return view('admin.products.view', compact('product', 'product_reviews'));
    }
    //review product
    public function review_status_approve(Request $request, $pro_id, $id)
    {
        $banner = product_reviews::findOrFail($id);
        if ($request->has('status')) {
            $request->validate([
                'status' => 'required|string',
            ]);

            $banner->status = $request->input('status');
        }

        $banner->save();

        return redirect()->route('products.view', ['product' => $pro_id])->with('success', 'review Updated successfully');
    }
    public function review_destroy(Request $request, $pro_id, $id)
    {

        $review = product_reviews::findOrFail($id);
        $review->delete();

        return redirect()->route('products.view', ['product' => $pro_id])->with('success', 'Product deleted successfully');
    }
    public function edit(Product $product)
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('admin.products.edit', compact('categories', 'subcategories', 'product'));
    }
    public function approve(Request $request, $id)
    {
        $banner = Product::findOrFail($id);
        if ($request->has('featured')) {
            $request->validate(['featured' => 'required|string',]);
            $banner->featured = $request->input('featured');
        } elseif ($request->has('status')) {
            $request->validate([
                'status' => 'required|string',
            ]);

            $banner->status = $request->input('status');
        }

        $banner->save();

        return redirect()->route('productss')->with('success', 'products Updated successfully');
    }
    public function update(Request $request, Product $product)
    {
        //dd($request->all());
        // Validation
        $validatedData = $request->validate([
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'name' => 'required',
            'featured' => 'boolean',
            'pcode' => 'required',
            'status' => 'required|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_tags' => ['nullable', 'regex:/^[a-zA-Z0-9\s,]+$/'],
            
            
        ], [
            'meta_tags.regex' => 'The Meta Tags field format is not correct.Contain only alphanumeric characters, whitespace characters, and commas, with at least one character present. It does not allow any other special characters in the string.',
        ]);

        $validatedData['description'] = $request->description;
        $validatedData['featured'] = $request->filled('featured');

        // Update the product
        $product->update($validatedData);

        // Handle deleted images
        if ($request->has('deleted_images')) {
            $deletedImageIds = explode(',', $request->input('deleted_images'));
            foreach ($deletedImageIds as $imageId) {
                $image = ProductImage::find($imageId);
                if ($image) {
                    Storage::delete('public/images/products/' . $image->image_path);
                    $image->delete();
                }
            }
        }

        // Handle new images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imageFile) {
                $imageDestinationPath = public_path('images/products');
                $uniqueId = rand(100000, 999999);
                $originalImageName = $imageFile->getClientOriginalName();
                $imageName = $uniqueId . '_' . $originalImageName;
                $imageFile->move($imageDestinationPath, $imageName);

                $product->images()->create([
                    'image_path' => $imageName,
                ]);
            }
        }

        if ($request->hasFile('new_images')) {
            foreach ($request->file('new_images') as $imageFile) {
                $imageDestinationPath = public_path('images/products');
                $uniqueId = rand(100000, 999999);
                $originalImageName = $imageFile->getClientOriginalName();
                $imageName = $uniqueId . '_' . $originalImageName;
                $imageFile->move($imageDestinationPath, $imageName);

                $product->images()->create([
                    'image_path' => $imageName,
                ]);
            }
        }

        // Handle variations
        if ($request->has('new_variations')) {
            foreach ($request->new_variations as $index => $variationData) {
                $variationImageName = null;

                if ($request->hasFile("new_variations.$index.image")) {
                    $imageFile = $request->file("new_variations.$index.image");
                    $imageDestinationPath = public_path('images/products');
                    $uniqueId = rand(100000, 999999);
                    $originalImageName = $imageFile->getClientOriginalName();
                    $variationImageName = $uniqueId . '_' . $originalImageName;
                    $imageFile->move($imageDestinationPath, $variationImageName);
                }

                $product->variations()->create([
                    'image' => $variationImageName,
                    'size' => $variationData['size'] ?? null,
                    'finish' => $variationData['finish'] ?? null,
                    'code' => $variationData['code'] ?? null,
                ]);
            }
        }

        // Handle existing variations
        if ($request->has('variations')) {
            foreach ($request->variations as $id => $variationData) {
                $variation = $product->variations()->find($id);
                if ($variation) {
                    if ($request->hasFile("variations.$id.image")) {
                        $imageFile = $request->file("variations.$id.image");
                        $imageDestinationPath = public_path('images/products');
                        $uniqueId = rand(100000, 999999);
                        $originalImageName = $imageFile->getClientOriginalName();
                        $variationImageName = $uniqueId . '_' . $originalImageName;
                        $imageFile->move($imageDestinationPath, $variationImageName);

                        // Delete the old image if a new one is uploaded
                        Storage::delete('public/images/products/' . $variation->image);

                        $variation->update([
                            'image' => $variationImageName,
                            'size' => $variationData['size'] ?? $variation->size,
                            'finish' => $variationData['finish'] ?? $variation->finish,
                            'code' => $variationData['code'] ?? $variation->code,
                        ]);
                    } else {
                        $variation->update([
                            'size' => $variationData['size'] ?? $variation->size,
                            'finish' => $variationData['finish'] ?? $variation->finish,
                            'code' => $variationData['code'] ?? $variation->code,
                        ]);
                    }
                }
            }
        }

        return redirect()->route('productss')->with('success', 'Product updated successfully');
    }


    public function updateSequence(Request $request)
    {

        $banners = $request->data;
        $i = 0;
        foreach ($banners as  $id) {
            $banner = Product::find($id);
            $banner->sequence  = $i;
            $banner->update();
            $i++;
        }

        return response()->json(['message' => 'Sequence updated successfully']);
    }
}
