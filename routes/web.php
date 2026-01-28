<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\postController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/Post/index", [postController::class, "index"]);
Route::get("/Category/index", [CategoryController::class, "index"]);
Route::get("/Tag/index", [TagController::class, "index"]);
Route::get("/Post/Create", [postController::class, "create"]);
Route::get("/Post/update", [postController::class, "update"]);
Route::get("/Post/delete", [postController::class, "delete"]);
Route::get("/Post/show", [postController::class, "show"]);
Route::get("/Category/Create", [CategoryController::class, "create"]);
Route::get("/Category/update", [CategoryController::class, "update"]);
Route::get("/Category/delete", [CategoryController::class, "delete"]);
Route::get("/Category/show", [CategoryController::class, "show"]);
Route::get("/Tag/Create", [TagController::class, "create"]);
Route::get("/Tag/update", [TagController::class, "update"]);
Route::get("/Tag/delete", [TagController::class, "delete"]);
Route::get("/Tag/show", [TagController::class, "show"]);

// Route::resource("POST", [postController::class, ]);
// Route::resource("GET", [CategoryController::class, ]);