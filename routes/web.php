<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('logged.home');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/registrar', [UserController::class, 'create'])->name('user.create');
Route::post('/registrar', [UserController::class, 'store'])->name('user.store');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

Route::get('/manga/{slug}', [MangaController::class, 'show'])->name('manga.show');

Route::get('/manga/category/{category}', [CategoryController::class, 'show'])->name('manga.category');

Route::get('/comments/{id?}', [CommentController::class, 'index'])->name('comment.index');

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/dashboard/manga/add', [AdminController::class, 'manga'])->name('admin.manga.index');
Route::post('/admin/dashboard/manga/add', [MangaController::class, 'store'])->name('admin.manga.store');