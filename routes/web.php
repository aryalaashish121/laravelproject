<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
//dashboard
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
//register
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

//login 
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

//logout controller
// Route::get('/logout',[LogoutController::class, 'index'])->name('logout');
Route::post('/logout',[LogoutController::class, 'store'])->name('logout');

//root
Route::get('/home', function () {
    return redirect()->route('posts.home');
});

