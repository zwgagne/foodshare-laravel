<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AddDonnationController; 

Route::get('/', [AppController::class, 'index']);
Route::post('/update', [AppController::class, 'update'])->middleware(['auth']);
Route::delete('/food/{id}', [AppController::class, 'destroy'])->name('delete_food');

Route::get('/profil', [AppController::class, 'profil'])->middleware(['auth']);
Route::put('/edit_profil', [AppController::class, 'updateProfil'])->name("edit_profil");
Route::delete('/profil/delete', [AppController::class, 'destroyUser'])->middleware(['auth'])->name('deleteUser');


Route::get('/food_donnation', [AddDonnationController::class, 'create'])->middleware(['auth'])->name('add.donnation');
Route::post('/food_donnation', [AddDonnationController::class, 'store'])->middleware(['auth']);


require __DIR__.'/auth.php';
