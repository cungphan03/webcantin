<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // FORM ĐĂNG KÝ
    public function showRegister()
    {
        return view('dangky');
    }

    // XỬ LÝ ĐĂNG KÝ
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login');
    }

    // FORM ĐĂNG NHẬP
    public function showLogin()
    {
        return view('login');
    }

    // XỬ LÝ ĐĂNG NHẬP
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }

        return back()->with('error', 'Sai tài khoản hoặc mật khẩu');
    }

    // ĐĂNG XUẤT
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}