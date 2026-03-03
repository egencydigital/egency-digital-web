<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mockery\Expectation;

class UserController extends Controller
{
    public function userRequest(Request $request){
        try{
            $validation = $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required',
                'message' => 'required'
            ]);
            $users = new User();
            $users->name = $validation['name'];
            $users->email = $validation['email'];
            $users->phone = $validation['phone'];
            $users->message = $validation['message'];
            $users->password = Hash::make('12345678');

            $users->save();

            return response()->json([
                'success' => true,
                'message' => 'Your Request has been sent successfully'
            ], 200);
            // return redirect()->back()->with('success', 'Your Request has been sent successfully');
        } catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function showRequest (){
        $showData = User::where('role', 'user')->get();
        return view('backend.userRequest', compact('showData'));
    }

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

        return back()->with( 'error', 'Invalid credentials');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('sueess', 'Logged out Successfully');
    }


}
