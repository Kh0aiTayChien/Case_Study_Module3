<?php

use App\Http\Controllers\ProviderController;
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

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');


Route::prefix('admin')->group(function () {
    Route::prefix('providers')->group(function () {
        Route::get('/', [ProviderController::class, 'index'])->name('providers.index');
        Route::get('/create', [ProviderController::class, 'create'])->name('providers.create');
        Route::post('/create', [ProviderController::class, 'store'])->name('providers.store');
        Route::get('/{id}/destroy', [ProviderController::class, 'destroy'])->name('providers.destroy');
        Route::get('/{id}/edit', [ProviderController::class, 'edit'])->name('providers.edit');
        Route::post('/{id}/edit', [ProviderController::class, 'update'])->name('providers.update');
    });

});
