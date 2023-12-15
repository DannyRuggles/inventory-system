<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/items', [ItemController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
