<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkincareController;

Route::get('/', [SkincareController::class, 'index']);
Route::get('/halaman_form', [SkincareController::class, 'halaman_form']);

Route::post('skincare/recommendation', [SkincareController::class, 'recommendation'])->name('skincare.recommendation');
Route::get('skincare/{id}', [SkincareController::class, 'show'])->name('skincare.show');
