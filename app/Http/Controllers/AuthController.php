<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }

    public function loginApp(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($validate)) {
            $user = auth()->user();
            return redirect('/');
        } else {
            return back()->withErrors(['message' => 'Username atau password tidak valid.'])->withInput();
        }
    }

    public function registration()
    {
        return view('auth.registration', [
            'title' => 'Registration'
        ]);
    }

    public function registrationApp(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|max:75',
            'username' => 'required|max:30',
            'password' => 'required',
            'confirm' => 'required|same:password'
        ]);

        $validated['password'] = Hash::make($request->input('password'));

        User::create($validated);

        return redirect('/login')->with('success', 'Registered Success, Please Login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
