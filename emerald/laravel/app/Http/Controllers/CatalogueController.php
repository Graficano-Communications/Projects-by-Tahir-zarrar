<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CatalogueController extends Controller
{
     public function view_catalogues()
    {
        $catalogues = Catalogue::orderBy('sequence')->get();
        return view('admin.catalouges' ,compact('catalogues') );
    }

    public function add_catalogues()
    {
        return view('admin.add-catalouges');
    }
    public function add_catalogues_data(Request $request)
    {
        // dd($request->all());
        {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'password' => 'nullable|string|max:255',
                // 'image' => 'required|varchar',
            ]);
        }

        $catalogues = new Catalogue;
        $catalogues->name = $request->input('name');
        $catalogues->password = $request->input('password');    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/catalogues/', $filename);
            $catalogues->image = $filename;
        }
        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/catalogues/', $filename);
            $catalogues->pdf = $filename;
        }
        $maxSequence = Catalogue ::max('sequence');
        $catalogues->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;
        $catalogues->save();
        return redirect('all-catalogues')->with('status', 'catalogues Added Successfully');
    
    }
    public function edit_catalogues($id)
    {
        $catalogues = Catalogue::find($id);
        return view('admin.edit-catalouges', compact('catalogues'));
    }
    public function edit_catalogue_data(Request $request, $id)
    {

        // dd($request->all());
        $catalogue = Catalogue::find($id);
    
        // Check if the catalogue exists
        if (!$catalogue) {
            return redirect('catalogues')->with('error', 'Catalogue not found');
        }
    
        // Update the catalogue's name and password
        $catalogue->name = $request->input('name');
        $catalogue->password = $request->input('password');// Use bcrypt for password encryption
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $destination = 'uploads/catalogues/' . $catalogue->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/catalogues/', $filename);
            $catalogue->image = $filename;
        }
    
        // Handle PDF upload
        if ($request->hasFile('pdf')) {
            $destination = 'uploads/catalogues/' . $catalogue->pdf;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/catalogues/', $filename);
            $catalogue->pdf = $filename;
        }
    
        // Save the updated catalogue
        $catalogue->save();
    
        return redirect('all-catalogues')->with('status', 'Catalogue updated successfully');
    }
    public function delete_catalogue($id)
    {
        $catalouges = Catalogue::find($id);
        $destination = 'uploads/catalouges/'.$catalouges->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $destination = 'uploads/catalouges/'.$catalouges->pdf;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $catalouges->delete();
        return redirect()->back()->with('status','catalouge  Deleted Successfully');
    }
    public function sort_catalogue(Request $request) {
        $catalogues = array_filter($request->input('data'), function($value) {
            return !is_null($value) && $value !== '';
        });
    
        $i = 0;
        foreach ($catalogues as $id) {
            $catalogue = Catalogue::find($id);
            if ($catalogue) {
                $catalogue->sequence = $i;
                $catalogue->save();
                $i++;
            }
        }
    
        return response()->json(['success' => true, 'data' => $catalogues]);
    }
}
