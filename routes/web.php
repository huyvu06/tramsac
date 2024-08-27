<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
// Route::get('/', function () {
//     return redirect('/home'); // Chuyển hướng đến trang /home
// });
Route::get('/', [HomeController::class, 'Home'])->name('home');

// admin
Route::prefix('admin')->group(function(){

});

;

// Group routes for other pages but without 'auth' prefix in the URL
Route::group(['as' => 'auth.'], function () {
    Route::get('/login', [UserController::class,'login'])->name('login');
    Route::get('/sign', [UserController::class,'sign'])->name('sign');
    Route::view('/network_system', 'auth.network_system')->name('network_system');
    Route::view('/user_manual', 'auth.user_manual')->name('user_manual');
    Route::view('/tramsac', 'auth.tramsac')->name('tramsac');
    Route::view('/news', 'auth.news')->name('news');
    Route::view('/details', 'auth.details')->name('details');
    Route::view('/introduce', 'auth.introduce')->name('introduce');
});

// Group routes for other pages but without 'admin' prefix in the URL
Route::group(['as' => 'admin.'], function () {
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
});