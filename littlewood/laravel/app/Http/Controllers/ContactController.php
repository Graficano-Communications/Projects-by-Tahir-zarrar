<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {

        return view('frontend.contact-us');
    }

    public function submitForm(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'comment' => 'required|string',
        ]);

        // Prepare data for email
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'comment' => $request->comment,
        ];
        // dd($data);

        // Send email using an inline Mail::send function
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('info@littlewoodsafety.com') // recipient's email
                ->subject('New Contact Form Submission')
                ->from($data['email'], $data['name']);
        });

        // Redirect back with a success message
        return redirect()->back()->with('status', 'Your message has been sent successfully!');
    }
    public function sample_request()
    {

        $portfolios = Portfolio::orderBy('sequence')->get();
        return view('frontend.sample', compact('portfolios'));
    }

    public function sample(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'comment' => 'required|string',
            'portfolio_id' => 'required|exists:portfolios,id',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048',
        ]);

        $portfolio = Portfolio::find($request->portfolio_id);

        $attachmentPath = null;
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $filename = time() . '_' . $file->getClientOriginalName();
            $attachmentPath = public_path('uploads/' . $filename);
            $file->move(public_path('uploads'), $filename);
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'comment' => $request->comment,
            'portfolio_name' => $portfolio->caption ?? 'N/A',
            'has_attachment' => $attachmentPath ? true : false, 
        ];

        Mail::send('emails.sample', $data, function ($message) use ($data, $attachmentPath, $request) {
            $message->to('info@littlewoodsafety.com')
                ->subject('New Sample Form Submission')
                ->from($data['email'], $data['name']);

            if ($attachmentPath) {
                $message->attach($attachmentPath);
            }
        });

        return redirect()->back()->with('status', 'Your message has been sent successfully!');
    }
}
