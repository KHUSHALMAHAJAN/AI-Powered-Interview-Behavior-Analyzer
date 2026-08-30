<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\OtpController;

Route::get('/', function () {
    return view('home');
});

Route::get('/signup', [
    SignupController::class,
    'showSignup'
])->name('signup');

Route::post('/signup', [
    SignupController::class,
    'register'
])->name('signup.register');


Route::get('/login', [
    LoginController::class,
    'showLogin'
])->name('login');

Route::post('/login', [
    LoginController::class,
    'login'
])->name('login.submit');

Route::get('/verify-otp', [
    OtpController::class,
    'show'
])->name('otp.verify');

Route::post('/verify-otp', [
    OtpController::class,
    'verify'
])->name('otp.verify.submit');