<?php

use App\Http\Controllers\QytetaretController;
use App\Http\Controllers\QytetetController;
use Illuminate\Support\Facades\Route;

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', [QytetaretController::class, 'index']);

Route::resource('qytetaret', QytetaretController::class);
Route::resource('/qytetet', QytetetController::class);

Route::delete('/qytetaret/{id}', [QytetaretController::class, 'destroy'])->name('qytetaret.destroy');




