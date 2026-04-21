<?php

namespace App\Http\Controllers;

use App\Models\Inquire;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mail\InquiryMail;
use Illuminate\Support\Facades\Mail;

class InquiresController extends Controller
{
    public function index()
    {

      
        $inquires = Inquire::orderBy('created_at', 'desc')->orderBy('sequence')->simplePaginate(20);
        $alertMessage = session('success');

        return view('admin.inquires.index', compact('alertMessage', 'inquires'));
    }

    public function create()
    {

        return view('admin.inquires.new');
    }

    public function edit($id)
    {
        $inquires = Inquire::findOrFail($id);

        return view('admin.inquires.edit', compact('inquires'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email',
            'quantity' => 'required|string',
            'phone' => 'required|string',
            'editor1' => 'required|string',
            'cf-turnstile-response'=>'required',
        ],[
          'cf-turnstile-response.required' => 'The captcha field is required to send the review of the product.',
      ]);
        $latestSequence = Inquire::max('sequence') ?? 0;
    
        $testimonialData = [
            'product_name' => $request->input('product_name'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'quantity' => $request->input('quantity'),
            'phone' => $request->input('phone'),
            'status' => 'pending',
            'message' => $request->input('editor1'),
            'sequence' => $latestSequence + 1,
        ];
    
    
        $testimonial = new Inquire($testimonialData);
        $testimonial->save();

        try {
            // Send email
            Mail::to('test@graficano.com')->send(new InquiryMail($testimonialData));
            return redirect()->back()->with('success', 'Inquire received successfully. soon the unik will let u know...!');  
        } catch (\Exception $e) {
            // Optionally, handle the error
            return redirect()->back()->with('error', 'Sorry ! Something went wrong.');
        }

       
    }

    public function destroy($id)
    {
        $inquires = Inquire::findOrFail($id);

        $inquires->delete();

        return redirect()->route('inquires')->with('success', 'inquire deleted successfully');
    }

    public function approve(Request $request, $id)
    {
        $banner = Inquire::findOrFail($id);

        $request->validate([
            'status' => 'required|string',
        ]);

        $banner->status = $request->input('status');

        $banner->save();

        return redirect()->route('inquires')->with('success', 'inquire Updated successfully');
    }
    public function update(Request $request, $id)
    {
        $banner = Inquire::findOrFail($id);

        $request->validate([
            'product_name' => 'required|string',
            'name' => 'required|string',
            'quantity' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'status' => 'required|string',
            'editor1' => 'required|string',
        ]);
        $banner->product_name = $request->input('product_name');
        $banner->name = $request->input('name');
        $banner->quantity = $request->input('quantity');
        $banner->email = $request->input('email');
        $banner->phone = $request->input('phone');
        $banner->status = $request->input('status');
        $banner->message = $request->input('editor1');

        $banner->save();

        return redirect()->route('inquires')->with('success', 'inquire Updated successfully');
    }

    public function updateSequence(Request $request){
  
        $banners = $request->data;
        $i = 0;
        foreach ($banners as  $id) {
            $banner = Inquire::find($id);
            $banner->sequence  = $i;
            $banner->update();
            $i++;
        }

        return response()->json(['message' => 'Sequence updated successfully']);
    }

}
