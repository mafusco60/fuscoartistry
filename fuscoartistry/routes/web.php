<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/auth/register', function () {
    return view('auth.register');
})->name('auth.register');

Route::get('/auth/login', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('/auth/forgot-password', function () {
    return view('auth.forgot-password');
})->name('auth.forgot-password');

Route::get('/auth/reset-password', function () {
    return view('auth.reset-password');
})->name('auth.reset-password');

Route::get('/auth/verify-email', function () {
    return view('auth.verify-email');
})->name('auth.verify-email');

Route::get('/auth/two-factor-challenge', function () {
    return view('auth.two-factor-challenge');
})->name('auth.two-factor-challenge');

Route::get('/auth/two-factor-challenge', function () {
    return view('auth.two-factor-challenge');
})->name('auth.two-factor-challenge');

Route::get('/auth/confirm-password', function () {
    return view('auth.confirm-password');
})->name('auth.confirm-password');

Route::get('/auth/logout', function () {
    return view('auth.logout');
})->name('auth.logout');



