<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RangeController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ReferenceVersionController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::group(['prefix' => 'products/{product}', 'as' => 'products.'], function () {
    Route::resource('references', ReferenceController::class);
    Route::group(['prefix' => 'references/{reference}', 'as' => 'references.'], function () {
        Route::resource('versions', ReferenceVersionController::class);
    });
});
Route::resource('ranges', RangeController::class);
