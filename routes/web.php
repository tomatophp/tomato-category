<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/types', [\TomatoPHP\TomatoCategory\Http\Controllers\TypeController::class, 'index'])->name('types.index');
    Route::get('admin/types/api', [\TomatoPHP\TomatoCategory\Http\Controllers\TypeController::class, 'api'])->name('types.api');
    Route::get('admin/types/create', [\TomatoPHP\TomatoCategory\Http\Controllers\TypeController::class, 'create'])->name('types.create');
    Route::post('admin/types', [\TomatoPHP\TomatoCategory\Http\Controllers\TypeController::class, 'store'])->name('types.store');
    Route::get('admin/types/{model}', [\TomatoPHP\TomatoCategory\Http\Controllers\TypeController::class, 'show'])->name('types.show');
    Route::get('admin/types/{model}/edit', [\TomatoPHP\TomatoCategory\Http\Controllers\TypeController::class, 'edit'])->name('types.edit');
    Route::post('admin/types/{model}', [\TomatoPHP\TomatoCategory\Http\Controllers\TypeController::class, 'update'])->name('types.update');
    Route::delete('admin/types/{model}', [\TomatoPHP\TomatoCategory\Http\Controllers\TypeController::class, 'destroy'])->name('types.destroy');
});

Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/status', [\TomatoPHP\TomatoCategory\Http\Controllers\StatusController::class, 'index'])->name('status.index');
    Route::get('admin/status/api', [\TomatoPHP\TomatoCategory\Http\Controllers\StatusController::class, 'api'])->name('status.api');
    Route::get('admin/status/create', [\TomatoPHP\TomatoCategory\Http\Controllers\StatusController::class, 'create'])->name('status.create');
    Route::post('admin/status', [\TomatoPHP\TomatoCategory\Http\Controllers\StatusController::class, 'store'])->name('status.store');
    Route::get('admin/status/{model}', [\TomatoPHP\TomatoCategory\Http\Controllers\StatusController::class, 'show'])->name('status.show');
    Route::get('admin/status/{model}/edit', [\TomatoPHP\TomatoCategory\Http\Controllers\StatusController::class, 'edit'])->name('status.edit');
    Route::post('admin/status/{model}', [\TomatoPHP\TomatoCategory\Http\Controllers\StatusController::class, 'update'])->name('status.update');
    Route::delete('admin/status/{model}', [\TomatoPHP\TomatoCategory\Http\Controllers\StatusController::class, 'destroy'])->name('status.destroy');
});

Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/categories', [\TomatoPHP\TomatoCategory\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
    Route::get('admin/categories/api', [\TomatoPHP\TomatoCategory\Http\Controllers\CategoryController::class, 'api'])->name('categories.api');
    Route::get('admin/categories/create', [\TomatoPHP\TomatoCategory\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
    Route::post('admin/categories', [\TomatoPHP\TomatoCategory\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
    Route::get('admin/categories/{model}', [\TomatoPHP\TomatoCategory\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');
    Route::get('admin/categories/{model}/edit', [\TomatoPHP\TomatoCategory\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('admin/categories/{model}', [\TomatoPHP\TomatoCategory\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
    Route::delete('admin/categories/{model}', [\TomatoPHP\TomatoCategory\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');
});

Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/categories-metas', [\TomatoPHP\TomatoCategory\Http\Controllers\CategoriesMetaController::class, 'index'])->name('categories-metas.index');
    Route::get('admin/categories-metas/api', [\TomatoPHP\TomatoCategory\Http\Controllers\CategoriesMetaController::class, 'api'])->name('categories-metas.api');
    Route::get('admin/categories-metas/create', [\TomatoPHP\TomatoCategory\Http\Controllers\CategoriesMetaController::class, 'create'])->name('categories-metas.create');
    Route::post('admin/categories-metas', [\TomatoPHP\TomatoCategory\Http\Controllers\CategoriesMetaController::class, 'store'])->name('categories-metas.store');
    Route::get('admin/categories-metas/{model}', [\TomatoPHP\TomatoCategory\Http\Controllers\CategoriesMetaController::class, 'show'])->name('categories-metas.show');
    Route::get('admin/categories-metas/{model}/edit', [\TomatoPHP\TomatoCategory\Http\Controllers\CategoriesMetaController::class, 'edit'])->name('categories-metas.edit');
    Route::post('admin/categories-metas/{model}', [\TomatoPHP\TomatoCategory\Http\Controllers\CategoriesMetaController::class, 'update'])->name('categories-metas.update');
    Route::delete('admin/categories-metas/{model}', [\TomatoPHP\TomatoCategory\Http\Controllers\CategoriesMetaController::class, 'destroy'])->name('categories-metas.destroy');
});
