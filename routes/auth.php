<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::middleware('guest')->group(function () {

    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('sign-in', [AuthController::class, 'signIn'])->name('signin');



    Volt::route('register', 'pages.auth.register')
        ->name('register');
});

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
