<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function LoginAdmin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            if (Auth::user()->role == 'admin') {
                return redirect()->route('dashboard')->with('success', 'Login successful!');
            }
            Auth::logout();
            return back()->with('error', 'Unauthorized access');
        }

        return back()->withErrors( 'error', 'Invalid credentials');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('sueess', 'Logged out Successfully');
    }


}
