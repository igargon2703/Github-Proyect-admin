<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Definición de las rutas principales
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');