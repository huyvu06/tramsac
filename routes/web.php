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
// Route::get('/', function () {
//     return view('nav.header'); // Đảm bảo rằng bạn có view 'home.blade.php' trong thư mục resources/views
// });
Route::get('/', function () {
    return redirect('/home'); // Chuyển hướng đến trang /home
});
Route::get('/', function () {
    return view('auth.home');
});

// Route cho trang đăng nhập
Route::get('/login', function () {
    return view('auth.login'); // Đảm bảo rằng bạn có view 'login.blade.php' trong thư mục resources/views/auth
});

// Route cho trang đăng ký
Route::get('/sign', function () {
    return view('auth.sign'); // Đảm bảo rằng bạn có view 'register.blade.php' trong thư mục resources/views/auth
});
Route::get('/network_system', function () {
    return view('auth.network_system'); // Đảm bảo rằng bạn có view 'register.blade.php' trong thư mục resources/views/auth
});
Route::get('/user_manual', function () {
    return view('auth.user_manual'); // Đảm bảo rằng bạn có view 'register.blade.php' trong thư mục resources/views/auth
});
Route::get('/tramsac', function () {
    return view('auth.tramsac'); // Đảm bảo rằng bạn có view 'register.blade.php' trong thư mục resources/views/auth
});
Route::get('/news', function () {
    return view('auth.news'); // Đảm bảo rằng bạn có view 'register.blade.php' trong thư mục resources/views/auth
});
Route::get('/introduce', function () {
    return view('auth.introduce'); // Đảm bảo rằng bạn có view 'register.blade.php' trong thư mục resources/views/auth
});