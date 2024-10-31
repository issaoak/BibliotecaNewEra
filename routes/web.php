<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibrosController;

Route::get('/', [LibrosController::class, 'index'])->name('principal');
Route::get('/registro', [LibrosController::class, 'create'])->name('registro');
Route::post('/registro', [LibrosController::class, 'store'])->name('libro.store');


require __DIR__.'/auth.php';
