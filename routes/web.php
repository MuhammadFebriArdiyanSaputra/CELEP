<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UjianAkhirController;
use App\Http\Controllers\AdminUserController;

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::resource('questions', QuestionController::class);
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::resource('/ujian', UjianAkhirController::class);

Route::get('/admin/users', [AdminUserController::class, 'index'])->name('admin.users.index');

