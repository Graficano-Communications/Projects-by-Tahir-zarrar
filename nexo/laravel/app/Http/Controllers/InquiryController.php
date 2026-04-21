<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiryMail;

class InquiryController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'service_name' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // send email
        Mail::to('info@corestarsports.com')->send(new InquiryMail($request->all()));

        return redirect()->back()->with('success', 'Inquiry sent successfully!');
    }
}
