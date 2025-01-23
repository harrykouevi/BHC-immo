<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnnonceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AvisController;

use Illuminate\Support\Facades\Route;

// Route::middleware(['auth', 'admin'])->group(function () {
Route::middleware(['auth'])->group(function () {


    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin');
    Route::get('/annonces', [AnnonceController::class, 'index'])->name('admin.annonces.index');
    Route::get('/annonces/create', [AnnonceController::class, 'create'])->name('admin.annonces.create');
    //route pour les articles

    Route::get('/article/{id}/edit', [ArticleController::class, 'edit'])->name('admin.article.edit');
    Route::get('/article/create', [ArticleController::class, 'create'])->name('admin.article.create');

    Route::delete('article/{id}', [ArticleController::class, 'destroy'])->name('admin.article.destroy');
    Route::get('/article', [ArticleController::class, 'index'])->name('admin.article.index');

    //route pour les avis
    
    Route::get('/avis/{id}/edit', [AvisController::class, 'edit'])->name('admin.avis.edit');
    Route::get('/avis/', [AvisController::class, 'index'])->name('admin.avis.index');


    //Route::get('/annonces', [AnnonceController::class, 'index'])->name('admin.annonces.index');
    // Route::post('/annonces/store', [AnnonceController::class, 'store'])->name('admin.annonces.store');

    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');

    // Route to show a single article
    Route::get('/annonces/{id}', [AnnonceController::class, 'show'])->name('admin.annonces.show');
    Route::post('/upload-image', [AnnonceController::class, 'uploadImage'])->name('admin.uploadImage');
    // Route to edit an existing article (show the form)
    Route::get('/annonces/{id}/edit', [AnnonceController::class, 'edit'])->name('admin.annonces.edit');

    //Route pour supprimer une annonce
    Route::delete('annonces/{id}', [AnnonceController::class, 'destroy'])->name('admin.annonces.destroy');

});

