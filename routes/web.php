<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasukController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/utama', [HomeController::class, 'home'])->name('home');
// Route::get('/surat-masuk', [HomeController::class, 'masuk'])->name('masuk');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/surat-masuk', [MasukController::class, 'index'])->name('masuk.index');


