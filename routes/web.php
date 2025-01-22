<?php

use App\Http\Controllers\QytetaretController;
use App\Http\Controllers\QytetetController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [QytetaretController::class, 'index']);

Route::resource('qytetaret', QytetaretController::class);

Route::get('/qytetet/qytetet', [QytetetController::class, 'index'])->name('qytetet.index');
Route::get('/qytetet/{id}', [QytetetController::class, 'show'])->name('qytetet.show');
Route::get('/qytetet/{id}/edit', [QytetetController::class, 'edit'])->name('qytetet.edit');
Route::put('/qytetet/{id}', [QytetetController::class, 'update'])->name('qytetet.update');
Route::get('/qytetet/qytetet/create', [QytetetController::class, 'create'])->name('qytetet.create');
Route::post('/qytetet', [QytetetController::class, 'store'])->name('qytetet.store');
Route::post('/qytetet/delete/{id}', [QytetetController::class, 'destroy'])->name('qytetet.destroy');
