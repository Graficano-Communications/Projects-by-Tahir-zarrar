<?php

namespace App\Http\Controllers;

use App\Career;
use Illuminate\Http\Request;
use Exception;

class CareerController extends Controller
{
    public function index()
    {
        $Careers = Career::paginate(25);

        return view('admin.careers.index', compact('Careers'));
    }

    public function create()
    {
        // Create a new instance of the Career model
        $Careers = new Career();

        // Pass the $Careers variable to the view
        return view('admin.careers.create', compact('Careers'));
    }

    public function store(Request $request)
    {
        
        // Validate the request data
        $request->validate([
            'title' => 'required|string',
            'url' => 'nullable|string',
            'post_date' => 'nullable|string',
            'description' => 'required|string',
            'gender' => 'nullable|array', 
            'gender.*' => 'in:Male,Female', 
        ]);



        // Get the maximum sequence value
        $max_order = Career::max('sequence');

        // Create a new Career instance
        $Career = new Career;

        // Assign sequence value
        if ($max_order) {
            $Career->sequence = ++$max_order;
        } else {
            $Career->sequence = 1;
        }

        // Fill the Career instance with request data and save it
        $Career->title = $request->title;
        $Career->post_date = $request->post_date;
        $Career->url = $request->url;
        $Career->description = $request->description;
        // Save gender as JSON
        $Career->gender = $request->gender ? json_encode($request->gender) : null;
       

        $Career->save();

        // Return a success message and redirect
        return redirect()->route('career.index')
            ->with('success_message', 'Career was successfully added.');
    }


    public function destroy($id)
    {
        try {
            $Career = Career::findOrFail($id);
            $Career->delete();

            return redirect()->route('career.index')
                ->with('success_message', 'Event was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    public function edit($id)
    {
        $Careers = Career::findOrFail($id);



        return view('admin.careers.edit', compact('Careers'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        // Validate the request data
        $request->validate([
            'title' => 'required|string',
            'url' => 'nullable|string',
            'post_date' => 'nullable|string',
            'description' => 'required|string',
            'gender' => 'nullable|array', // Validate gender as an array
            'gender.*' => 'in:Male,Female', // Ensure each value is either 'Male' or 'Female'
        ]);
        
        //dd($request->post_date);

        // Find the Career by its ID
        $Career = Career::findOrFail($id);

        // Update the Career attributes with the request data
        $Career->title = $request->title;
        $Career->post_date = $request->post_date;
        $Career->url = $request->url;
        $Career->description = $request->description;
        // Save gender as JSON
        $Career->gender = $request->gender ? json_encode($request->gender) : null;

        // Save the updated Career
        $Career->save();

        // Redirect back to the index page with a success message
        return redirect()->route('career.index')
            ->with('success_message', 'Career was successfully updated.');
    }

    public function sort_careers(Request $request){
        $Career = $request->data;
        $i = 0;
        foreach ($Career as  $id) {
            $Career = Career::find($id);
            $Career->sequence  = $i;
            $Career->update();
            $i++;
        }
    }
}
