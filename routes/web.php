<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;

Route::get('/', [WorkshopController::class, 'home'])->name('home');
Route::get('/workshops', [WorkshopController::class, 'index'])->name('workshops.index');
Route::get('/workshops/{id}', [WorkshopController::class, 'show'])->name('workshops.show');
Route::get('/about', [WorkshopController::class, 'about'])->name('about');