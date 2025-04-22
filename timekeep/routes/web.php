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

// creating a new user
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
// editing a user
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
// deleting a user
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
// viewing a user
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

//===========================================

// creating a new project
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
// editing a project
Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
// deleting a project
Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
// viewing a project
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');


//===========================================
// creating a new task
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
// editing a task
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
// deleting a task
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
// viewing a task
Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');




Route::resource('users', UserController::class);
Route::resource('projects', ProjectController::class);
Route::resource('tasks', TaskController::class);