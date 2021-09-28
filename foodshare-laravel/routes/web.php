<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', [AppController::class, 'index']);
Route::get('/profil', [AppController::class, 'profil'])->middleware(['auth']);

Route::get('/FoodDonnation', function () {
    return view('fooddonnation');
})->middleware(['auth'])->name('fooddonnation');

require __DIR__.'/auth.php';
