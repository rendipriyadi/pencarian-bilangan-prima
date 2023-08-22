<?php

use App\Http\Controllers\BilanganPrimaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BilanganPrimaController::class, 'index'])->name('bilangan_prima.index');
Route::post('bilangan_prima/proses', [BilanganPrimaController::class, 'proses'])->name('bilangan_prima.proses');
