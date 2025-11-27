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

    /**
     * Handle login POST
     */
    public function login(Request $request)
    {
        // Validate form input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Try to authenticate user
        if (Auth::attempt($credentials)) {

            // Protect against session fixation
            $request->session()->regenerate();

            // Redirect to conference list
            return redirect()->intended('/conferences');
        }

        // Auth failed → send error back to form
        return back()->withErrors([
            'email' => 'Incorrect email or password.',
        ])->withInput();
    }

    /**
     * Logout user
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
