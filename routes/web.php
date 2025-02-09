<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\UserController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/balance', [BalanceController::class, 'index'])->name('balance');

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/user-currer/{id}', [UserController::class, 'user_show_currer'])->name('user_show_currer');
Route::get('/user-guard/{id}', [UserController::class, 'user_show_guard'])->name('user_show_guard');
Route::post('/users-create', [UserController::class, 'create'])->name('users_create');


