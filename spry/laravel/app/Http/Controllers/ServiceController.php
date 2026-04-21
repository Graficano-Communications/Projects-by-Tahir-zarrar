<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function view_service()
    {
        $services = Service::all();

        return view('admin.services', compact('services'));
    }

    // Show form to add a new service
    public function add_service()
    {
        $category = Category::all();

        return view('admin.add-services', compact('category'));
    }

    public function add_service_data(Request $request)
    {
        $imagePaths = []; // Array to store image paths

        if ($request->hasFile('service_images')) {
            foreach ($request->file('service_images') as $file) {
                $imageName = time().'_'.$file->getClientOriginalName();
                $file->move('images/services', $imageName);
                $imagePaths[] = $imageName;
            }
        }
        // dd($request->all());
        // Store service data
        $service = new Service();
        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->category_id = $request->category_id;
        $service->subcategory_id = $request->subcategory_id;
        $service->is_featured = $request->input('is_featured', 0);
        $service->description = $request->editor1;
        $service->description2 = $request->editor2;
        $service->sku = $request->sku;
        $service->tags = $request->tags;
        $service->meta_title = $request->input('meta_title');
        $service->meta_description = $request->input('meta_description');
        $service->image_alt = $request->input('image_alt');
        $service->service_images = json_encode($imagePaths);
        $service->save();

        return redirect()->route('services')->with('success', 'Service added successfully!');
    }

    public function edit_service($id)
    {
        $service = Service::findOrFail($id);
        $category = Category::all();
        $subcategories = Subcategory::where('categories_id', $service->category_id)->get();

        return view('admin.edit-services', compact('service', 'category', 'subcategories'));
    }

    public function edit_service_data(Request $request, $id)
    {
        // Update service data
        $service = Service::findOrFail($id);
        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->sku = $request->sku;
        $service->tags = $request->tags;
        $service->category_id = $request->category_id;
        $service->subcategory_id = $request->subcategory_id;
        $service->is_featured = $request->input('is_featured', 0);
        $service->description = $request->editor1;
        $service->description2 = $request->editor2;
        $service->meta_title = $request->input('meta_title');
        $service->meta_description = $request->input('meta_description');
        $service->image_alt = $request->input('image_alt');

        if ($request->has('removed_images')) {
            $removedImages = json_decode($request->input('removed_images'), true);

            if (is_array($removedImages) && !empty($removedImages)) {
                foreach ($removedImages as $image) {
                    $imagePath = ('images/services/'.$image);
                    if (file_exists($imagePath)) {
                        unlink($imagePath); // delete file from public/images/cars
                    }
                }

                $serviceImages = json_decode($service->service_images, true) ?? [];
                $serviceImages = array_diff($serviceImages, $removedImages);
                $service->service_images = json_encode(array_values($serviceImages));
            }
        }

        // --- Handle New Images Upload ---
        if ($request->hasFile('service_images')) {
            $newImages = [];
            foreach ($request->file('service_images') as $file) {
                $filename = time().'_'.$file->getClientOriginalName();
                $file->move('images/services', $filename);
                $newImages[] = $filename;
            }

            $serviceImages = json_decode($service->service_images, true) ?? [];
            $serviceImages = array_merge($serviceImages, $newImages);
            $service->service_images = json_encode(array_values($serviceImages));
        }

        $service->save();

        return redirect()->route('services')->with('success', 'Service updated successfully!');
    }

    public function delete_service($id)
    {
        // Find the service by ID
        $service = Service::findOrFail($id);

        if ($service->service_image && file_exists('uploads/services/'.$service->service_image)) {
            unlink('uploads/services/'.$service->service_image);
        }

        // Delete the associated characteristics if any
        if ($service->characteristics) {
            foreach ($service->characteristics as $characteristic) {
                // Delete image if exists
                if ($characteristic->image && file_exists('uploads/services/'.$characteristic->image)) {
                    unlink('uploads/services/'.$characteristic->image);
                }
                $characteristic->delete();
            }
        }

        // Delete the associated FAQs if any
        if ($service->faqs) {
            foreach ($service->faqs as $faq) {
                $faq->delete();
            }
        }

        // Finally, delete the service itself
        $service->delete();

        // Redirect back with success message
        return redirect()->route('services')->with('success', 'Service deleted successfully!');
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
