<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/',[HomePageController::class,'index'])->name('index');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');