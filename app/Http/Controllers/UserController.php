<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
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
    
    $validatedData = $req->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    // dd($validatedData);
    $validatedData['password'] = Hash::make($req->password);

    // dd($validatedData);
    try {
        User::create($validatedData);

    } catch (\Throwable $th) {
        dd($th); 
    }

    return redirect()->route('login');
}


public function postLogin(Request $req) {
    if (Auth::attempt(['email' => $req->email, 'password' => $req->password,'role'=>0])) {
       
            return view('auth.home');
        
    }

    return redirect()->back()->with('error', 'Thông tin đăng nhập không đúng.');
}


}
