<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;

// Categories Routes
Route::resource('categories', CategoryController::class);
Route::delete('categories/{id}', 'CategoryController@destroy')->name('categories.destroy');

// Items Routes
Route::resource('items', ItemController::class);
Route::delete('items/{id}', 'ItemController@destroy')->name('items.destroy');
