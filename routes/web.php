<?php

use Illuminate\Support\Facades\Route;

if(config("tomato-category.features.category")){
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

}
if(config("tomato-category.features.types")){
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
}
