<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AddDonnationController; 

Route::get('/', [AppController::class, 'index']);
Route::get('/profil', [AppController::class, 'profil'])->middleware(['auth']);

Route::get('/food_donnation', [AddDonnationController::class, 'create'])->middleware(['auth'])->name('add.donnation');
Route::post('/food_donnation', [AddDonnationController::class, 'store'])->middleware(['auth']);


require __DIR__.'/auth.php';
