<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/jadwal', [PageController::class, 'jadwal'])->name('jadwal');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');