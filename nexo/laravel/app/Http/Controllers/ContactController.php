<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function submitForm(Request $request)
    {
        // Validate the form input
        // $request->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|email',
        //     'phone' => 'nullable|string',
        //     'comment' => 'required|string',
        // ]);

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
            $message->to('info@corestarsports.com') // recipient's email
                ->subject('New Contact Form Submission')
               ;
        });

        // Redirect back with a success message
        return redirect()->back()->with('status', 'Your message has been sent successfully!');
    }
}
