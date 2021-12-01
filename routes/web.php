<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\IndexController;

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
;
Route::get('/index', [IndexController::class, 'index'] )->middleware('auth');

Route::get('/login', [loginController::class, 'index'] )->name('login')-> middleware('guest');
Route::post('/login', [loginController::class, 'authenticate'] )->name('authenticate');
Route::post('/logout', [loginController::class, 'logout'] );

Route::get('/register', [RegisterController::class, 'index'] )-> middleware('guest');
Route::post('/register', [RegisterController::class, 'store'] );