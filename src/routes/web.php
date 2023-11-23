<?php

use Illuminate\Support\Facades\Route;
use Naranjatec\Login\Http\Controllers\LoginController;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});
Route::get('/logout', [LoginController::class, 'logout'])->middleware(['auth'])->name('logout');