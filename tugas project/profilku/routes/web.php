<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', action: function () {
    
})->name('login');

Route::get('/', function () {
    return view('profile');
});

Route::get('/profil', function () {
    return view('about');
});


use App\Http\Controllers\skillcontroller;
Route::get(uri: '/profil/skills', action: [skillcontroller::class, 'index']);
Route::post(uri: '/profil/skills', action: [skillcontroller::class, 'store']);
Route::delete(uri: '/profil/skills/{id}', action: [skillcontroller::class, 'destroy']);

use App\Http\Controllers\GoogleAuthController;

Route::get('/auth/google', [GoogleAuthController::class, 'redirect']);
Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
