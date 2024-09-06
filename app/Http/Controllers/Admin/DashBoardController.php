<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function logout(){
        
        return view('auth.login');
    }
    public function account()
    {
        return view('admin.account');
    }

    public function news()
    {
        return view('admin.news');
    }

    public function approval()
    {
        return view('admin.approval');
    }

    public function chargingStation()
    {
        return view('admin.charging-station');
    }
    public function email()
    {
        return view('admin.email');
    }

    public function settings()
    {
        return view('admin.settings');
    }
}
