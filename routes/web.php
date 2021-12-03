<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AbsenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing-page',[
        'title' => "Selamat Datang"
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        'title' => "Profile"
    ]);
});
Route::get('/absensi', function () {
    return view('absensi',[
        'title' => "Profile"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard/index',[
        'title' => "Profile"
    ]);
});

Route::get('/index', [IndexController::class, 'index'] )->middleware('auth');

Route::get('/login', [loginController::class, 'index'] )->name('login')-> middleware('guest');
Route::post('/login', [loginController::class, 'authenticate'] )->name('authenticate');
Route::post('/logout', [loginController::class, 'logout'] );

Route::get('/register', [RegisterController::class, 'index'] )-> middleware('guest');
Route::post('/register', [RegisterController::class, 'store'] );


// Route::get('/absensi', [AbsensiController::class, 'absensi'])->middleware('auth');
// Route::post('/absen', [AbsensiController::class, 'absen'])->middleware('auth');