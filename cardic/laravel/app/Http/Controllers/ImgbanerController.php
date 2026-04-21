<?php

namespace App\Http\Controllers;

use App\Record;
use App\ProImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImgbanerController extends Controller
{
    public function view_banner()
    {
        $banners = ProImage::all();
        return view('admin.Product-detail.banners', compact('banners'));
    }

    public function view_image_banner($id)
    {
        //dd($id);
        $banners =  ProImage::find($id);
        $positions = $banners->records()->pluck('position')->toArray();
        return view('admin.Product-detail.create-detail', compact('banners', 'positions'));
    }


    public function view_result()
    {
        $banners = ProImage::first();
        $positions = Record::pluck('position')->toArray();
        $records = Record::all(); // Fetch all records
        return view('admin.Product-detail.index', compact('banners', 'positions', 'records'));
    }



    public function add_banner()
    {
        $banners = ProImage::first(); // Fetch the banner ProImage (if required)
        $positions = Record::pluck('position')->toArray(); // Fetch all positions
        return view('admin.Product-detail.add-banners', compact('banners', 'positions'));
    }



    public function add_banner_data(Request $request)
    {
        //dd($request->all());


        $banner = new ProImage;
        $banner->caption = $request->input('caption');
        $banner->category = $request->input('category');
        $banner->description = $request->input('description');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/banners/', $filename);
            $banner->image = $filename;
        }

        $iconsData = [];
        if ($request->has('icons')) {
            foreach ($request->icons as $entry) {
                // each $entry is ['file' => UploadedFile, 'label' => '…']
                if (isset($entry['file']) && $entry['file']->isValid()) {
                    $iconFile = $entry['file'];
                    $iconName = uniqid() . '.' . $iconFile->getClientOriginalExtension();
                    $iconFile->move('uploads/banners/', $iconName);

                    $iconsData[] = [
                        'file'  => $iconName,
                        'label' => $entry['label'],
                    ];
                }
            }
        }

        // store as JSON
        $banner->icons = json_encode($iconsData);

        $banner->save();
        return redirect()->route('pro-banners')->with('status', 'Banner Added Successfully');
    }



    public function edit_banner($id)
    {
        $banners = ProImage::find($id);
        return view('admin.Product-detail.edit-banners', compact('banners'));
    }


    // public function edit_banner_data(Request $request, $id)
    // {

    //     $banners = ProImage::find($id);
    //     $banners->caption = $request->input('caption');
    //     $banners->category = $request->input('category');
    //     $banners->description = $request->input('description');
    //     if ($request->hasfile('image')) {
    //         $destination = 'uploads/banners/' . $banners->ProImage;
    //         if (File::exists($destination)) {
    //             File::delete($destination);
    //         }
    //         $file = $request->file('image');
    //         $extention = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $extention;
    //         $file->move('uploads/banners/', $filename);
    //         $banners->image = $filename;
    //     }

    //     $existingIcons = $banners->icons
    //         ? explode(',', $banners->icons)
    //         : [];

    //     if ($request->filled('remove_icons')) {
    //         //dd('jo');
    //         foreach ($request->input('remove_icons') as $toRemove) {
    //             $path = 'uploads/banners/' . $toRemove;
    //             if (File::exists($path)) {
    //                 File::delete($path);
    //             }
    //             $existingIcons = array_diff($existingIcons, [$toRemove]);
    //         }
    //     }


    //     if ($request->hasFile('icons')) {
    //         //dd('jo');
    //         foreach ($request->file('icons') as $icon) {
    //             $iconName = uniqid() . '.' . $icon->getClientOriginalExtension();
    //             $icon->move('uploads/banners/', $iconName);
    //             $existingIcons[] = $iconName;
    //         }
    //     }
    //     $banners->icons = implode(',', $existingIcons);

    //     $banners->update();
    //     return redirect()->route('pro-banners')->with('status', 'Banner Updated Successfully');
    // }


    public function edit_banner_data(Request $request, $id)
    {
        //dd($request->all());
        $banners = ProImage::findOrFail($id);

        // 1) Update basic fields
        $banners->caption     = $request->input('caption');
        $banners->category    = $request->input('category');
        $banners->description = $request->input('description');

        // 2) Replace banner image if provided
        if ($request->hasFile('image')) {
            $oldBanner = 'uploads/banners/' . $banners->image;
            if (File::exists($oldBanner)) {
                File::delete($oldBanner);
            }
            $file     = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/banners/', $filename);
            $banners->image = $filename;
        }

        // 3) Decode existing JSON icons array
        $existingIcons = $banners->icons
            ? json_decode($banners->icons, true)
            : [];

        // 4) Remove any checked icons
        if ($request->filled('remove_icons')) {
            //dd('hi');
            foreach ($request->input('remove_icons') as $toRemove) {
                $path = 'uploads/banners/' . $toRemove;
                if (File::exists($path)) {
                    File::delete($path);
                }
                // filter out entries whose 'file' matches $toRemove
                $existingIcons = array_filter($existingIcons, function ($icon) use ($toRemove) {
                    return $icon['file'] !== $toRemove;
                });
            }
            // reindex array
            $existingIcons = array_values($existingIcons);
        }

        // 5) Handle newly uploaded icons + labels (from your repeater: new_icons[index][file], new_icons[index][label])
        if ($request->has('new_icons')) {
            //dd('hppi');
            foreach ($request->new_icons as $entry) {
                if (isset($entry['file']) && $entry['file']->isValid()) {
                    $iconFile = $entry['file'];
                    $label    = $entry['label'];
                    $iconName = uniqid() . '.' . $iconFile->getClientOriginalExtension();
                    $iconFile->move('uploads/banners/', $iconName);

                    $existingIcons[] = [
                        'file'  => $iconName,
                        'label' => $label,
                    ];
                }
            }
        }

        // 6) Re‐encode JSON and save
        $banners->icons = json_encode($existingIcons);

        $banners->save();

        return redirect()
            ->route('pro-banners')
            ->with('status', 'Banner and icons updated successfully');
    }
    public function delete_banner($id)
    {
        $banners = ProImage::find($id);
        $destination = 'uploads/banners/' . $banners->ProImage;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $banners->delete();
        return redirect()->back()->with('status', 'Banners Deleted Successfully');
    }
}
