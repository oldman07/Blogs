<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function dashboard()
    {
        return view('auth.dashboard');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        ]);

    // Attempt to authenticate the user using the provided credentials
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect the user to the dashboard page
             return redirect()->intended('dashboard');
        }

    // If authentication fails, redirect back to the login page with an error message
        return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
