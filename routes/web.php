<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;

Route::resource('categories', CategoryController::class);


Route::get('categories/{id}/delete', 'CategoryController@destroy')->name('categories.destroy'); 
Route::post('categories', 'CategoryController@store')->name('categories.store');
Route::get('categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');
Route::put('categories/{id}', 'CategoryController@update')->name('categories.update');




// Items Routes
Route::resource('items', ItemController::class);
Route::get('items/{id}/delete', 'ItemController@destroy')->name('items.destroy'); 
Route::post('items', 'ItemController@store')->name('items.store');
Route::get('items/{id}/edit', 'ItemController@edit')->name('items.edit');
Route::put('items/{id}', 'ItemController@update')->name('items.update');




