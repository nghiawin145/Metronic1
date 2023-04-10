<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{


    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showProfileForm()
    {
        return view('profile.show');
    }

    // public function login(Request $request)
    // {
    //     // $request->validate([
    //     //     'email' => 'required|email',
    //     //     'password' => 'required',
    //     // ]);

    //     // $remember = $request->input('remember');

    //     // if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
    //     //     $request->session()->regenerate();
    //     //     return redirect()->route('Home.home');
    //     // }

    //     // return back()->withErrors([
    //     //     'email' => 'The provided credentials do not match our records.',
    //     // ]);
    //     return redirect()->route('Home.home');
    // }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('Auth.login');
    }

}
