<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    //
    public function showLogin() {
        return view('layout.login');
    }

    public function authUser(Request $request) : RedirectResponse {

        // getting credentials
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // dd($credentials);
            $request->session()->regenerate();
            // return view('layout.blog.create');
            return redirect()
                ->intended('/blog/create')
                ->with('message', 'User Login Successfully');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
    * Log the user out of the application.
    */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/')->with('message', 'User Logout Successfully');
        
    }

}
