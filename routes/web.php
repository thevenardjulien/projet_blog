<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'index'])->name('index');

Route::prefix('category')->name('categories.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/add', [CategoryController::class, 'add'])->name('add');
    Route::post('/add', [CategoryController::class, 'store'])->name('store');
});

Route::prefix('article')->name('articles.')->group(function () {
    Route::get('/add', [ArticleController::class, 'add'])->name('add');
    Route::post('/add', [ArticleController::class, 'store'])->name('store');
    Route::get('/list', [ArticleController::class, 'list'])->name('list');
    Route::get('/{article}', [ArticleController::class, 'show'])->name('show');
    Route::get('/category/{category}', [ArticleController::class, 'listByCategory'])->name('list-by-category');
});
