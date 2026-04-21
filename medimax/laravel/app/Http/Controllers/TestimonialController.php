<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    public function index()
    {

        $testimonials = Testimonial::orderBy('sequence')->get();
        $alertMessage = session('success');

        return view('admin.testimonial.index', compact('alertMessage', 'testimonials'));
    }

    public function create()
    {

        return view('admin.testimonial.new');
    }

    public function edit($id)
    {
        $testimonials = Testimonial::findOrFail($id);

        return view('admin.testimonial.edit', compact('testimonials'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $latestSequence = Testimonial::max('sequence') ?? 0;

        // Prepare the data to be stored
        $testimonialData = [
            'name' => $request->input('name'),
            'password' => $request->input('password'),
            'feature' => $request->input('feature'),
            
            'sequence' => $latestSequence + 1,
        ];

        // Handle the Image Upload
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageDestinationPath = public_path('images/catalogues');
            $uniqueId = rand(100000, 999999);
            $originalImageName = $imageFile->getClientOriginalName();
            $imageName = $uniqueId . '_' . $originalImageName;
            $imageFile->move($imageDestinationPath, $imageName);
            $testimonialData['image_path'] = 'images/catalogues/' . $imageName;
        }

        // Handle the PDF Upload
        if ($request->hasFile('pdf')) {
            $pdfFile = $request->file('pdf');
            $pdfDestinationPath = public_path('images/catalogues');
            $uniqueId = rand(100000, 999999);
            $originalPdfName = $pdfFile->getClientOriginalName();
            $pdfName = $uniqueId . '_' . $originalPdfName;
            $pdfFile->move($pdfDestinationPath, $pdfName);
            $testimonialData['pdf'] = 'images/catalogues/' . $pdfName;
        }

        // Create a new Testimonial record in the database
        $testimonial = new Testimonial($testimonialData);
        $testimonial->save();

        // Redirect to a specific route with a success message
        return redirect()->route('testimonials')->with('success', 'Testimonial added successfully');
    }


    public function destroy($id)
    {
        $Testimonial = Testimonial::findOrFail($id);

        Storage::disk('public')->delete($Testimonial->image_path);

        $Testimonial->delete();

        return redirect()->route('testimonials')->with('success', 'Testimonial deleted successfully');
    }

    
    public function update(Request $request, $id)
    {
        $banner = Testimonial::findOrFail($id);

        // Update testimonial fields
        $banner->name = $request->input('name');
        
        $banner->password = $request->input('password');
        $banner->feature = $request->input('feature');

        // Handle Image File Upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($banner->image_path && file_exists(public_path($banner->image_path))) {
                unlink(public_path($banner->image_path));
            }

            // Upload new image
            $imageFile = $request->file('image');
            $imageDestinationPath = public_path('images/catalogues');
            $uniqueId = rand(100000, 999999);
            $originalImageName = $imageFile->getClientOriginalName();
            $imageName = $uniqueId . '_' . $originalImageName;
            $imageFile->move($imageDestinationPath, $imageName);
            $banner->image_path = 'images/catalogues/' . $imageName;
        }

        // Handle PDF File Upload
        if ($request->hasFile('pdf')) {
            // Delete old PDF if it exists
            if ($banner->pdf && file_exists(public_path($banner->pdf))) {
                unlink(public_path($banner->pdf));
            }

            // Upload new PDF
            $pdfFile = $request->file('pdf');
            $pdfDestinationPath = public_path('images/catalogues');
            $uniqueId = rand(100000, 999999);
            $originalPdfName = $pdfFile->getClientOriginalName();
            $pdfName = $uniqueId . '_' . $originalPdfName;
            $pdfFile->move($pdfDestinationPath, $pdfName);
            $banner->pdf = 'images/catalogues/' . $pdfName;
        }

        // Save the updated testimonial
        $banner->save();

        return redirect()->route('testimonials')->with('success', 'Testimonial updated successfully');
    }


    public function updateSequence(Request $request)
    {

        $banners = $request->data;
        $i = 0;
        foreach ($banners as  $id) {
            $banner = Testimonial::find($id);
            $banner->sequence  = $i;
            $banner->update();
            $i++;
        }

        return response()->json(['message' => 'Sequence updated successfully']);
    }

 
}
