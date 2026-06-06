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
        ], [
            'name.required' => 'Vui lòng nhập tên',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email không hợp lệ',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu phải ít nhất 6 ký tự',
            'password.confirmed' => 'Mật khẩu nhập lại không đúng',
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