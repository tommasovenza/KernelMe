<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contactForm(Request $request) {

        // validatedData
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        if($validatedData) {
            // capture data
            $firstName = $request->input('first_name');
            $lastName = $request->input('last_name');
            $email = $request->input('email');
            $message = $request->input('text_area');

            dd($firstName, $lastName, $email, $message);
        }
    }
}
