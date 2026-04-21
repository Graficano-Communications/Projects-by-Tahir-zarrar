<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PortfolioImage;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {

        $portfolio = Portfolio::orderBy('sequence')->get();
        $alertMessage = session('success');

        return view('admin.portfolio.index', compact('alertMessage', 'portfolio'));
    }

    public function checkSlug(Request $request)
    {
        $slugExists = Portfolio::where('slug', $request->slug)->exists();

        return response()->json(['exists' => $slugExists]);
    }

    public function create()
    {

        return view('admin.portfolio.new');
    }


    public function store(Request $request)
    {

        dd($request->all());


        $latestSequence = Team::max('sequence') ?? 0;

        // Prepare data to be inserted
        $data = [
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),

            'status' => $request->input('status'),
            'sequence' => $latestSequence + 1,
            'chl_tags' => json_encode($request->input('chl_tags', [])), // Encode tags as JSON
        ];


        if ($request->hasFile('image')) {
            $frontFile = $request->file('image');
            $frontDestinationPath = public_path('images/portfolio');
            $frontFileName = $frontFile->getClientOriginalName();
            $frontFile->move($frontDestinationPath, $frontFileName);
            $data['front_image'] = 'images/portfolio/' . $frontFileName;
        }

        if ($request->hasFile('detail_image')) {
            $detailFile = $request->file('detail_image');
            $detailDestinationPath = public_path('images/portfolio');
            $detailFileName = $detailFile->getClientOriginalName();
            $detailFile->move($detailDestinationPath, $detailFileName);
            $data['detail_image'] = 'images/portfolio/' . $detailFileName;
        }




        $portfolio = new Portfolio($data);
        //dd($portfolio);
        $portfolio->save();


        if ($request->hasFile('images')) {
            //dd('yes');
            foreach ($request->file('images') as $imageFile) {
                //dd('here');
                $imageDestinationPath = public_path('images/portfolio');
                $imageFileName = $imageFile->getClientOriginalName();
                $imageFile->move($imageDestinationPath, $imageFileName);

                //dd($imageFileName);

                PortfolioImage::create([
                    'portfolio_id' => $portfolio->id,
                    'images' => 'images/portfolio/' . $imageFileName,
                ]);
            }
        }

        return redirect()->route('portfolio')->with('success', 'Portfolio added successfully');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        return view('admin.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $portfolio = Portfolio::findOrFail($id);

       

        // Update text fields
        $portfolio->name = $request->input('name');
        $portfolio->slug = $request->input('slug');
        $portfolio->status = $request->input('status');
        $portfolio->description = $request->input('description');

        // Handle file uploads
        $destinationPath = public_path('images/portfolio');

        // Update front image
        if ($request->hasFile('image')) {
            if ($portfolio->front_image && file_exists(public_path($portfolio->front_image))) {
                unlink(public_path($portfolio->front_image));
            }
            $portfolio->front_image = $this->handleFileUpload($request->file('image'), $destinationPath);
        }

        // Update detail image
        if ($request->hasFile('detail_image')) {
            //dd('here');
            if ($portfolio->detail_image && file_exists(public_path($portfolio->detail_image))) {
                unlink(public_path($portfolio->detail_image));
            }
            $portfolio->detail_image = $this->handleFileUpload($request->file('detail_image'), $destinationPath);
        }

      

        $portfolio->save();


          // Handle deleted images
          if ($request->has('deleted_images')) {
            $deletedImageIds = explode(',', $request->input('deleted_images'));
            foreach ($deletedImageIds as $imageId) {
                $image = PortfolioImage::find($imageId);
                if ($image) {
                    
                    Storage::delete('images/portfolio/' . $image->image_path);
                    $image->delete();
                }
            }
        }

        // Handle new images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imageFile) {
                $imageDestinationPath = public_path('images/portfolio');
                $uniqueId = rand(100000, 999999);
                $originalImageName = $imageFile->getClientOriginalName();
                $imageName = $uniqueId . '_' . $originalImageName;
                $imageFile->move($imageDestinationPath, $imageName);

                $portfolio->images()->create([
                    'images' => $imageName,
                ]);
            }
        }

        if ($request->hasFile('new_images')) {
            foreach ($request->file('new_images') as $imageFile) {
                $imageDestinationPath = public_path('images/portfolio');
                $uniqueId = rand(100000, 999999);
                $originalImageName = $imageFile->getClientOriginalName();
                $imageName = $uniqueId . '_' . $originalImageName;
                $imageFile->move($imageDestinationPath, $imageName);

                $portfolio->images()->create([
                    'images' => $imageName,
                ]);
            }
        }

        // // Handle new images
        // if ($request->hasFile('new_images')) {
        //     foreach ($request->file('new_images') as $imageFile) {
        //         $imagePath = $this->handleFileUpload($imageFile, $destinationPath);
        //         PortfolioImage::create([
        //             'portfolio_id' => $portfolio->id,
        //             'images' => $imagePath,
        //         ]);
        //     }
        // }

        // // Remove old images if requested
        // if ($request->has('remove_images')) {
        //     //dd('rmove');
        //     foreach ($request->input('remove_images') as $imageToRemove) {
        //         //dd($portfolio->id);
        //         $imageRecord = PortfolioImage::where('portfolio_id', $portfolio->id)
        //             ->where('images', $imageToRemove);
        //             //dd($imageRecord);
        //         if ($imageRecord) {
        //             if (file_exists(public_path($imageToRemove))) {
        //                 unlink(public_path($imageToRemove));
        //             }
        //             //dd($imageRecord);
        //             $imageRecord->delete();
        //         }
        //     }
        // }

        return redirect()->route('portfolio')->with('success', 'Portfolio Updated successfully');
    }

    private function handleFileUpload($file, $destinationPath)
    {
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move($destinationPath, $fileName);
        return 'images/portfolio/' . $fileName;
    }



    // public function update(Request $request, $id)
    // {
    //     //dd($request->all());
    //     $banner = Portfolio::findOrFail($id);

    //     $request->validate([
    //         'name' => 'required|string',
    //         'status' => 'required|string',
    //     ]);

    //     // Update text fields
    //     $banner->name = $request->input('name');
    //     $banner->slug = $request->input('slug');
    //     $banner->status = $request->input('status');
    //     $banner->description = $request->input('description');

    //     // Update image if a new file is uploaded
    //     if ($request->hasFile('image')) {
    //         // Delete the old image from storage if it exists
    //         if ($banner->front_image && file_exists(public_path($banner->front_image))) {
    //             unlink(public_path($banner->front_image));
    //         }

    //         // Store the new image
    //         $frontFile = $request->file('image');
    //         $frontDestinationPath = public_path('images/portfolio');
    //         $frontFileName = $frontFile->getClientOriginalName();
    //         $frontFile->move($frontDestinationPath, $frontFileName);
    //         $frontImagePath = 'images/portfolio/' . $frontFileName;

    //         $banner->front_image = $frontImagePath;
    //     }



    //     // Update detail image if a new file is uploaded
    //     if ($request->hasFile('detail_image')) {
    //         // Delete the old detail image from storage if it exists
    //         if ($banner->detail_image && file_exists(public_path($banner->detail_image))) {
    //             unlink(public_path($banner->detail_image));
    //         }

    //         // Store the new detail image
    //         $detailImageFile = $request->file('detail_image');
    //         $detailImageDestinationPath = public_path('images/portfolio');
    //         $detailImageFileName = $detailImageFile->getClientOriginalName();
    //         $detailImageFile->move($detailImageDestinationPath, $detailImageFileName);
    //         $detailImagePath = 'images/portfolio/' . $detailImageFileName;

    //         $banner->detail_image = $detailImagePath;
    //     }




    //     if ($request->has('chl_tags')) {
    //         $banner->chl_tags = json_encode($request->input('chl_tags'));
    //     }

    //     $banner->save();

    //     return redirect()->route('portfolio')->with('success', 'Portfolio Updated successfully');
    // }

    public function destroy($id)
    {
        $team = Portfolio::findOrFail($id);

        // Delete the main image if it exists
        if ($team->front_image && file_exists(public_path($team->front_image))) {
            unlink(public_path($team->front_image));
        }



        // Delete the detail image if it exists
        if ($team->detail_image && file_exists(public_path($team->detail_image))) {
            unlink(public_path($team->detail_image));
        }



        // Delete the team record
        $team->delete();

        return redirect()->route('portfolio')->with('success', 'Portfolio deleted successfully');
    }

    public function approve(Request $request, $id)
    {
        $banner = Portfolio::findOrFail($id);

        $request->validate([
            'status' => 'required|string',
        ]);

        $banner->status = $request->input('status');

        $banner->save();

        return redirect()->route('portfolio')->with('success', 'Team Updated successfully');
    }

    public function updateSequence(Request $request)
    {

        $banners = $request->data;
        $i = 0;
        foreach ($banners as  $id) {
            $banner = Portfolio::find($id);
            $banner->sequence  = $i;
            $banner->update();
            $i++;
        }

        return response()->json(['message' => 'Sequence updated successfully']);
    }
}
