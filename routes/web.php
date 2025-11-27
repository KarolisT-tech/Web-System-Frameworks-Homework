<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/conferences', [ConferenceController::class, 'showAllConferences'])->middleware('auth')->name('conferences.showAllConferences');

Route::get('login', [authController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [authController::class, 'login'])->name('login');
Route::post('logout', [authController::class, 'logout'])->name('logout');
