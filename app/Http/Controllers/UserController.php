<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function sign(){
        return view('auth.sign');
    }

    public function postSign(Request $req)
{
    // Validate request data (consider adding validation rules for email uniqueness)
    $validatedData = $req->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    $validatedData['password'] = Hash::make($req->password);
    dd($req->all());
    try {
        User::create($validatedData);
    } catch (\Throwable $th) {
        dd($th); // Handle the error, possibly by showing a user-friendly message
    }

    return redirect()->route('login');
}

public function postLogin(Request $req) {
    // Xác thực người dùng
    // if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
    //     $user = Auth::user();

    //     // Kiểm tra lại session
    //     if(session()->has('user')) {
    //         session()->forget('user');
    //     }
    //     session(['user' => $user]);

    //     // Debug thông tin session
    //     dd(session()->all());

    //     // Kiểm tra vai trò của người dùng
    //     if ($user->role == 'admin') {
    //         return redirect()->route('admin.dashboard');
    //     } else {
    //         return redirect()->route('home');
    //     }
    // }

    return redirect()->back()->with('error', 'Thông tin đăng nhập không đúng.');
}


}
