<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::post('/submit', [HomeController::class, 'submit'])->name('submit.form');
