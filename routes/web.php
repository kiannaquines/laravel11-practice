<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

// Student URLS
Route::get('students/', [StudentController::class, 'index'])->name(name: 'student.index');
Route::post('students/create/', [StudentController::class, 'create'])->name(name: 'student.create');
Route::get('students/edit/{id}', [StudentController::class, 'edit'])->name(name: 'student.edit');
Route::put('students/update/{id}', [StudentController::class, 'edit'])->name(name: 'student.update');
Route::get('students/show/{id}', [StudentController::class, 'show'])->name(name: 'student.show');
Route::delete('students/delete/{id}', [StudentController::class, 'destroy'])->name(name: 'student.destroy');


// Users URLS
Route::get('users/', [UserController::class, 'index'])->name(name: 'users.index');
Route::post('users/create', [UserController::class, 'create'])->name(name: 'users.create');
Route::get('users/edit/{id}', [UserController::class, 'edit'])->name(name: 'users.edit');
Route::put('users/update/{id}', [UserController::class, 'update'])->name(name: 'users.update');
Route::get('users/show/{id}', [UserController::class, 'show'])->name(name: 'users.show');
Route::delete('users/delete/{id}', [UserController::class, 'destroy'])->name(name: 'users.destroy');
