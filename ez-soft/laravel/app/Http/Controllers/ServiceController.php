<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCharacteristic;
use App\Models\ServiceFaq;
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
        return view('admin.add-services');
    }
    public function add_service_data(Request $request)
    {
        // dd($request->all());
        // Store service data
        $service = new Service();
        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->first_heading = $request->first_heading;
        $service->detailing = $request->detailing;
        $service->description = $request->editor1;
        

        if ($request->hasFile('service_image')) {
            $file = $request->file('service_image');
            $originalFilename = $file->getClientOriginalName();
            $filename = time() . '_' . $originalFilename;
            $file->move('uploads/services/', $filename);
            $service->service_image = $filename;
        }

        $service->save();
        
        // Store characteristics (if available)
        if ($request->has('second_heading')) {
            foreach ($request->second_heading as $key => $heading) {
                $characteristic = new ServiceCharacteristic();
                $characteristic->service_id = $service->id;
                $characteristic->heading = $heading;
                $characteristic->detail = $request->detail[$key];

                // Store image if uploaded
                if ($request->hasFile('image.' . $key)) {
                    $file = $request->file('image.' . $key);
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '_' . $key . '.' . $extension;
                    $file->move('uploads/services/', $filename);
                    $characteristic->image = $filename;
                }

                $characteristic->save();
            }
        }

        // Store FAQs (if available)
        if ($request->has('question')) {
            foreach ($request->question as $key => $question) {
                $faq = new ServiceFaq();
                $faq->service_id = $service->id;
                $faq->question = $question;
                $faq->answer = $request->answer[$key];
                $faq->save();
            }
        }

        return redirect()->route('services')->with('success', 'Service added successfully!');
    }
    public function edit_service($id)
    {
        $service = Service::with(['characteristics', 'faqs'])->findOrFail($id);
        return view('admin.edit-services', compact('service'));
    }
    public function edit_service_data(Request $request, $id)
    {
        // Update service data
        $service = Service::findOrFail($id);
        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->first_heading = $request->first_heading;
        $service->detailing = $request->detailing;
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

        // Delete Characteristics if requested
        if ($request->deleted_characteristics) {
            ServiceCharacteristic::whereIn('id', json_decode($request->deleted_characteristics))->delete();
        }

        // Delete FAQs if requested
        if ($request->deleted_faqs) {
            ServiceFaq::whereIn('id', json_decode($request->deleted_faqs))->delete();
        }

        // Update or Add Characteristics
        if ($request->has('second_heading')) {
            foreach ($request->second_heading as $key => $heading) {
                $data = [
                    'service_id' => $service->id,
                    'heading' => $heading,
                    'detail' => $request->detail[$key],
                ];

                // If image is uploaded, add it to the data array
                if ($request->hasFile("image.$key")) {
                    $file = $request->file("image.$key");
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . "_$key." . $extension;
                    $file->move('uploads/services/', $filename); // Storing the new image

                    $data['image'] = $filename;
                }

                // Create or update the characteristic
                ServiceCharacteristic::updateOrCreate(
                    ['id' => $request->characteristic_id[$key] ?? null], // Check if exists
                    $data
                );
            }
        }

        // Update or Add FAQs
        if ($request->has('question')) {
            foreach ($request->question as $key => $question) {
                ServiceFaq::updateOrCreate(
                    ['id' => $request->faq_id[$key] ?? null], // Check if exists
                    [
                        'service_id' => $service->id,
                        'question' => $question,
                        'answer' => $request->answer[$key],
                    ]
                );
            }
        }

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
}
