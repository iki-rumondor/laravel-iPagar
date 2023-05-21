<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function viewLogin()
    {
        return view('auth.login');
    }

    public function viewRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            "username" => "required|min:8|max:20|unique:users",
            "password" => "required|min:8|max:255",
            "password_confirm" => "required|min:8|max:255|same:password",
            "phone_num" => "required"
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['level'] = "Basic";
        $validatedData['phone_num'] =   formatPhoneNumber($validatedData['phone_num']);

        $user = User::create($validatedData);
        $user->assignRole('customer');

        return redirect('/auth/login')->with('success', 'Berhasil mendaftar user baru');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            "username" => "required|exists:users",
            "password" => "required",
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if ($credentials['username'] == 'admin') {
                return redirect()->intended('/admin')->with('success', 'Selamat datang Admin');
            } else {
                return redirect()->intended('/customer')->with('success', 'Selamat datang Admin');
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home');
    }
}
