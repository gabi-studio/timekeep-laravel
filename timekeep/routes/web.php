<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');




Route::resource('users', UserController::class);
Route::resource('projects', ProjectController::class);
Route::resource('tasks', TaskController::class);