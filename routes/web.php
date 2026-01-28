<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::post('/posts', [PostController::class, 'store']);
Route::resource("posts", PostController::class);
Route::resource("categories", CategoryController::class);
Route::resource("Tag", TagController::class);