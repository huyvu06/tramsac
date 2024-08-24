<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route cho trang chủ
Route::get('/', function () {
    return redirect('/home'); // Chuyển hướng đến trang /home
});
Route::get('/home', function () {
    return view('auth.home');
});

// Group routes for other pages but without 'auth' prefix in the URL
Route::group(['as' => 'auth.'], function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::view('/sign', 'auth.sign')->name('sign');
    Route::view('/network_system', 'auth.network_system')->name('network_system');
    Route::view('/user_manual', 'auth.user_manual')->name('user_manual');
    Route::view('/tramsac', 'auth.tramsac')->name('tramsac');
    Route::view('/news', 'auth.news')->name('news');
    Route::view('/details', 'auth.details')->name('details');
    Route::view('/introduce', 'auth.introduce')->name('introduce');
});
