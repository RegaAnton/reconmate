<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home.index');

Route::get('/data', [DataController::class, 'index'])->name('admin.data.index');
Route::POST('/data', [DataController::class, 'store'])->name('admin.data.store');
Route::DELETE('/data/{slug}', [DataController::class, 'destroy'])->name('admin.data.destroy');
