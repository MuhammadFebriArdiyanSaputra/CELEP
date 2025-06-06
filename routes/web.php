<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UjianAkhirController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminDashboardController;

Route::resource('questions', QuestionController::class);
Route::resource('ujian', UjianAkhirController::class);
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
