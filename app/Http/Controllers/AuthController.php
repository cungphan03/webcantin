<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
{
    // validate
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:3'
    ]);

    // xử lý đăng nhập
    if (Auth::attempt($request->only('email', 'password'))) {
        $request->session()->regenerate(); // rất quan trọng
        return redirect()->intended('/menu');
    }

    return back()->with('error', 'Sai email hoặc mật khẩu');
}

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
