<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;

Route::get('/signin', [AuthController::class, 'showSignIn'])->name('signin');
Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/signup', [AuthController::class, 'showSignUp'])->name('signup');
Route::get('/signup-success', [AuthController::class, 'signupSuccess'])->name('signup.success');
Route::post('/signup-submit', [AuthController::class, 'signupSubmit'])->name('signup.submit');
