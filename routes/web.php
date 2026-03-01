<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('backend.auth.login');
});
Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/about-us', function () {
    return view('frontend.about');
});
Route::get('/services', function () {
    return view('frontend.services');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/dashboard', function () {
    return view('backend.sidebar');
})->name('dashboard');


// ====================================== Backend Routes ================================================
Route::post('/login', [UserController::class, 'LoginAdmin' ])->name('admin.login');
Route::post('/logout', [UserController::class, 'logout']);



Route::middleware('admin.auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.sidebar');
    })->name('dashboard');

});
