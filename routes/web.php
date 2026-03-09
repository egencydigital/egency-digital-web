<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\TeamController;
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

Route::post('/userRequest', [UserController::class, 'userRequest'])->name('user.message');

Route::middleware('admin.auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.sidebar');
    })->name('dashboard');

    // User Request
    Route::get('/showRequest', [UserController::class, 'showRequest']);

    /* =================================================================== */
    // Team Section Routes
    Route::get('/teams', [TeamController::class, 'ShowMember']);
    Route::get('/addMember/{id?}', [TeamController::class, 'addMemberPage']);
    Route::delete('/deleteTeam/{id}', [TeamController::class, 'deleteMember'])->name('deleteTeam');

    // Route::get('/team', function () {
    //     return view('backend.teamMember');
    // });
    Route::post('/createTeam/{id?}', [TeamController::class, 'createTeam'])->name('createTeam');

    /* ============================================================================== */
    Route::get('/blogPage', [BlogController::class, 'blogPage']);
    Route::get('/blogFormPage/{id?}', [BlogController::class, 'blogFormPage']);
    Route::post('/createBlog/{id?}', [BlogController::class, 'createBlog'])->name('createBlog');
    Route::delete('/blogDelete/{id}', [BlogController::class, 'blogDelete']);

});
