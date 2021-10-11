<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.homepage');
})->name('homepage');

Route::get('/admin', function () {
    return view('backend.login');
});

Route::get('/introduce', function () {
    return view('frontend.introduce');
})->name('introduce');

Route::get('/service', function () {
    return view('frontend.service');
})->name('service');
