<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Show Contact Page
    public function showContactPage() {
        return view('layout.contacts');
    }
    
    // Submit Contact Form and send Email
    public function submitContactForm(Request $request) {

        // capture data
        $validatedData = $request->validate([
            'first_name' => 'required|min:3|max:255',
            'last_name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        if($validatedData) {
            // dd($firstName, $lastName, $email, $message);

            // sending email
            Mail::to('tommasovenza@gmail.com')->send(new ContactMail($validatedData));
            // 
            return back()
                ->with('success', 'Thank you for your message!');
        }
    }
}
