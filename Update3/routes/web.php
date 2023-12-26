<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkincareController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SkincareController::class, 'face']);
Route::get('/halaman_form', [SkincareController::class, 'halaman_form']);
Route::post('/proses-input', [SkincareController::class, 'prosesInput'])->name('proses-input');
Route::get('/halaman_hasil/{kesimpulan}', [SkincareController::class, 'halaman_hasil'])->name('halaman_hasil');

?>
