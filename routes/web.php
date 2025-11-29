<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if(auth()->check()){
        return redirect('/conferences');
    }
    return redirect('/login');
});
Route::get('/conferences', [ConferenceController::class, 'showAllConferences'])->name('conferences.showAllConferences');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('conferences', ConferenceController::class)->only(['create', 'store', 'edit', 'update', 'destroy', 'show']);
