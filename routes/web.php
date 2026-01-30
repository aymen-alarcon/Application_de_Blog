<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Post/create', [PostController::class, 'create'])->name("Post.create");
Route::post('/Post/store', [PostController::class, 'store'])->name("Post.store");
Route::get('/Post/edit/{post}', [PostController::class, 'edit'])->name("Post.edit");
Route::put('/Post/update/{post}', [PostController::class, 'update'])->name("Post.update");
Route::delete('/Post/delete/{post}', [PostController::class, 'destroy'])->name("Post.destroy");
Route::get('/Post/index', [PostController::class, 'index'])->name("Post.index");

Route::get('/Categories/create', [CategoryController::class, 'create']);
Route::post('/Categories/store', [CategoryController::class, 'store']);
Route::get('/Categories/edit/{category}', [CategoryController::class, 'edit']);
Route::put('/Categories/update/{category}', [CategoryController::class, 'update']);
Route::delete('/Categories/delete/{category}', [CategoryController::class, 'destroy']);
Route::get('/Categories/index', [CategoryController::class, 'index']);

Route::get('/Tag/create', [TagController::class, 'create']);
Route::post('/Tag/store', [TagController::class, 'store']);
Route::get('/Tag/edit/{tag}', [TagController::class, 'edit']);
Route::put('/Tag/update/{tag}', [TagController::class, 'update']);
Route::delete('/Tag/delete/{tag}', [TagController::class, 'destroy']);
Route::get('/Tag/index', [TagController::class, 'index']);