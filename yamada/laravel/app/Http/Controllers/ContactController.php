<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMail(Request $request)

    {
        // dd($request->all());
        // Validate the form input
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            // 'phone' => 'nullable|string',
            'comment' => 'required|string',
        ]);

        // Prepare data for email
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            // 'phone' => $request->phone,
            'comment' => $request->comment,
        ];

        // Create the mailto URL
        $mailto = "mailto:info@yamadainst.com"
            . "?subject=" . urlencode("New Contact Form Submission")
            . "&body=" . urlencode(
                "Name: " . $request->input('name') . "\n" .
                    "Email: " . $request->input('email') . "\n" .
                    "Message: " . $request->input('message')
            );

        // Redirect to mailto link
        return redirect()->away($mailto);
    }
}
