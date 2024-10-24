<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home.index');

Route::get('/data', [DataController::class, 'index'])->name('admin.data.index');
Route::get('/data/create', [DataController::class, 'create'])->name('admin.data.create');
Route::POST('/data', [DataController::class, 'store'])->name('admin.data.store');
Route::DELETE('/data/{index}', [DataController::class, 'destroy'])->name('admin.data.destroy');