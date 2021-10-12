<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
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

Route::get('/login', [LoginController::class, 'showFormLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('change-password', [LoginController::class, 'showFormChangePassword'])->name('change.form');
Route::post('change-password', [LoginController::class, 'changePassword'])->name('change.password');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    });
});
    

Route::get('/', function () {
    return view('frontend.homepage');
});

Route::get('/admin', function () {
    return view('backend.login');
});


Route::get('/admin/manager', function () {
    return view('backend.dashboard');
});

Route::get('/user', function (){
    return view('frontend.user.userhomepage');
});