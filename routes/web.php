<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;


// Student URLS
Route::resource('students', StudentController::class);

// Users URLS
Route::resource('users', UserController::class);
