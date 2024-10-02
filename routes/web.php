<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DataController::class, 'index'])->name('index');
Route::POST('/data', [DataController::class, 'store'])->name('store');
Route::DELETE('/data/{slug}', [DataController::class, 'destroy'])->name('destroy');
