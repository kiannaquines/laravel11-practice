<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

// Student URLS
Route::get('students/',[StudentController::class,'index'])->name(name: 'students_list');


// Users URLS
Route::get('users/',[UserController::class,'index'])->name(name: 'users_list');


