<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NetworkSystemController;
use App\Http\Controllers\TramsacController;


use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\AdminController;

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


// Group routes for other pages but without 'auth' prefix in the URL
Route::get('/home', [HomeController::class, 'Home'])->name('home');

    Route::get('/login', [UserController::class,'login'])->name('login');
    Route::post('/login', [UserController::class,'postLogin']);

    
    Route::get('/sign', [UserController::class,'sign'])->name('sign');
    Route::post('/sign', [UserController::class,'postSign']);


    Route::get('/', [HomeController::class, 'Home'])->name('home');

    Route::view('/map', 'auth.map')->name('map');
    Route::view('/network_system', 'auth.network_system')->name('network_system');  

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
   
    Route::view('/user_manual', 'auth.user_manual')->name('user_manual');
    Route::view('/tramsac', 'auth.tramsac')->name('tramsac');
    Route::get('/news', [HomeController::class,'getNew'])->name('news');
    Route::view('/details', 'auth.details')->name('details');
    Route::view('/introduce', 'auth.introduce')->name('introduce');

    Route::get('/logon',[AdminController::class,'logon'])->name('logon');
    Route::post('/logon',[AdminController::class,'postLogon'])->name('admin.logon');
    // admin
    Route::prefix('admin')->middleware('admin')->group(function () {
      Route::get('/admin', [DashBoardController::class, 'index'])->name('admin.index');
  });
  

  // Đăng ký trở thành đối tác
Route::post('/register-partner', [NetworkSystemController::class, 'store'])->name('register.partner');


// Route để hiển thị form đăng ký trạm sạc
Route::get('/register-charging-station', [TramSacController::class, 'showForm'])->name('charging-station.show');

// Route để lưu trạm sạc
Route::post('/register-charging-station', [TramSacController::class, 'store'])->name('charging-station.store');


//Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/approval', [DashboardController::class, 'approval']);
Route::get('/charging-station', [DashboardController::class, 'chargingStation']);
Route::get('/email', [DashboardController::class, 'email']);
Route::get('/settings', [DashboardController::class, 'settings']);

//Admin
Route::prefix('admin')->group(function () {
  Route::get('/account', [App\Http\Controllers\Admin\UserController::class, 'account'])->name('admin.account');
  Route::get('/news', [App\Http\Controllers\Admin\NewsController::class, 'news'])->name('admin.news');
});

// admin
// routes/web.php
Route::prefix('admin')->group(function () {
  Route::get('/', [DashBoardController::class, 'index'])->name('admin.index');
  // routes/web.php
  Route::get('/dashboard', [DashBoardController::class, 'logout'])->name('logout');

  Route::get('/', [DashBoardController::class, 'index'])->name('admin.index');
  Route::get('/account', [DashBoardController::class, 'account'])->name('admin.account');
  Route::get('/news', [DashBoardController::class, 'news'])->name('admin.news');
  Route::get('/approval', [DashBoardController::class, 'approval'])->name('admin.approval');
  Route::get('/charging-station', [DashBoardController::class, 'chargingStation'])->name('admin.charging-station');
  Route::get('/email', [DashBoardController::class, 'email'])->name('admin.email');
  Route::get('/settings', [DashBoardController::class, 'settings'])->name('admin.settings');

});