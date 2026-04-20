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
        // dd($request->all());
        // Store service data
        $service = new Service();
        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->category_id = $request->category_id;
        $service->subcategory_id = $request->subcategory_id;
        $service->description = $request->editor1;
        

        if ($request->hasFile('service_image')) {
            $file = $request->file('service_image');
            $originalFilename = $file->getClientOriginalName();
            $filename = time() . '_' . $originalFilename;
            $file->move('uploads/services/', $filename);
            $service->service_image = $filename;
        }

        $service->save();
        
       

        return redirect()->route('services')->with('success', 'Service added successfully!');
    }
    public function edit_service($id)
    {
        $service = Service::findOrFail($id);
        $category = Category::all();
        $subcategories = Subcategory::where('categories_id', $service->category_id)->get();
        return view('admin.edit-services', compact('service', 'category','subcategories'));
    }
    public function edit_service_data(Request $request, $id)
    {
        // Update service data
        $service = Service::findOrFail($id);
        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->category_id = $request->category_id;
        $service->subcategory_id = $request->subcategory_id;
        $service->description = $request->editor1;

        if ($request->hasFile('service_image')) {
            // Delete the old service image if it exists
            if (!empty($service->service_image) && file_exists('uploads/services/' . $service->service_image)) {
                unlink('uploads/services/' . $service->service_image);
            }

            // Upload new service image
            $file = $request->file('service_image');
            $originalFilename = $file->getClientOriginalName();
            $filename = time() . '_' . $originalFilename;
            $file->move('uploads/services/', $filename);

            // Update service image field in the database
            $service->service_image = $filename;
        }

        $service->save();

        
        return redirect()->route('services')->with('success', 'Service updated successfully!');
    }

    public function delete_service($id)
    {
        // Find the service by ID
        $service = Service::findOrFail($id);

        if ($service->service_image && file_exists('uploads/services/' . $service->service_image)) {
            unlink('uploads/services/' . $service->service_image);
        }

        // Delete the associated characteristics if any
        if ($service->characteristics) {
            foreach ($service->characteristics as $characteristic) {
                // Delete image if exists
                if ($characteristic->image && file_exists('uploads/services/' . $characteristic->image)) {
                    unlink('uploads/services/' . $characteristic->image);
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

