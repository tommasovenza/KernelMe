<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Models\EmailReceived;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Show Contact Page
    public function showContactPage()
    {
        return view('layout.contacts');
    }

    // Submit Contact Form and send Email
    public function submitContactForm(Request $request)
    {
        // capture data
        $validatedData = $request->validate([
            'first_name' => 'required|min:3|max:255',
            'last_name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'message' => 'required|min:10',
            'privacy' => 'required',
        ]);

        if ($validatedData) {
            // saving data in DB
            $emailReceived = new EmailReceived();
            $emailReceived->first_name = $validatedData['first_name'];
            $emailReceived->last_name = $validatedData['last_name'];
            $emailReceived->email = $validatedData['email'];
            $emailReceived->message = $validatedData['message'];
            $emailReceived->privacy = 'accepted';
            $emailReceived->ip = $request->ip();
            $emailReceived->save();

            // sending email
            Mail::to('tommasovenza@gmail.com')->send(new ContactMail($validatedData));
            // 
            return back()
                ->with('message', 'Thank you for your message, it has been sent!');
        } else {
            return back()
                ->with('error', 'sorry, something was wrong!');
        }
    }
}
