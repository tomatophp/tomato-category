<?php

use Illuminate\Support\Facades\Route;

Route::name('api.')->middleware(config('tomato-category.middelware'))->prefix('api')->group(function (){
    Route::get('categories',[\TomatoPHP\TomatoCategory\Http\Controllers\CategoryController::class,'index'])->name('categories.index');
    Route::get('categories/{model}',[\TomatoPHP\TomatoCategory\Http\Controllers\CategoryController::class,'show'])->name('categories.show');

    Route::get('types',[\TomatoPHP\TomatoCategory\Http\Controllers\TypeController::class,'index'])->name('types.index');
    Route::get('types/{model}',[\TomatoPHP\TomatoCategory\Http\Controllers\TypeController::class,'show'])->name('types.show');
});

