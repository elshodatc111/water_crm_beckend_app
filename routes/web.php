<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StorageController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/stotage', [StorageController::class, 'index'])->name('stotage');
Route::post('/stotage-create', [StorageController::class, 'store'])->name('stotage_create');
Route::get('/stotage-show/{id}', [StorageController::class, 'show'])->name('stotage_show');
