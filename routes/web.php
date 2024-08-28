<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\DashBoardController;
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


// admin
// routes/web.php




// Group routes for other pages but without 'auth' prefix in the URL

    Route::get('/login', [UserController::class,'login'])->name('login');
    Route::post('/login', [UserController::class,'postLogin']);

   
    Route::get('/sign', [UserController::class,'sign'])->name('sign');
    Route::post('/sign', [UserController::class,'postSign']);

    Route::get('/', [HomeController::class, 'Home'])->name('home');

    Route::view('/network_system', 'auth.network_system')->name('network_system');
    Route::view('/user_manual', 'auth.user_manual')->name('user_manual');
    Route::view('/tramsac', 'auth.tramsac')->name('tramsac');
    Route::view('/news', 'auth.news')->name('news');
    Route::view('/details', 'auth.details')->name('details');
    Route::view('/introduce', 'auth.introduce')->name('introduce');

    Route::prefix('admin')->group(function(){
      Route::get('/', [DashBoardController::class, 'index'])->name('admin.index');
    // routes/web.php
      Route::get('/dashboard',[DashBoardController::class, 'logout'])->name('logout');
  
  });