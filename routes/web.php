<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RangeController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ReferenceVersionController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ReferenceVersionLocationController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('products', ProductController::class);
Route::resource('suppliers', SupplierController::class);
Route::group(['prefix' => 'products/{product}', 'as' => 'products.'], function () {
    Route::resource('references', ReferenceController::class);
    Route::group(['prefix' => 'references/{reference}', 'as' => 'references.'], function () {
        Route::resource('versions', ReferenceVersionController::class);
    });
});
Route::resource('ranges', RangeController::class);
Route::resource('cities', CityController::class);
Route::group(['prefix' => 'cities/{city}', 'as' => 'cities.'], function () {
    Route::resource('locations', LocationController::class);
    Route::group(['prefix' => 'locations/{location}', 'as' => 'locations.'], function () {
        Route::resource('reference-versions', ReferenceVersionLocationController::class);
        Route::group(['prefix' => 'reference-versions/{reference_version}', 'as' => 'reference-versions.'], function () {
            Route::resource('transactions', TransactionController::class);
        });
    });
});

