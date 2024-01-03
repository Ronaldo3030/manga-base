<?php

use App\Http\Controllers\MangaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('logged.home');
Route::get('/registrar', [UserController::class, 'create'])->name('user.create');


Route::get('/manga/{slug}', [MangaController::class, 'show'])->name('manga.show');