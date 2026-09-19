<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MenuController;
 
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');