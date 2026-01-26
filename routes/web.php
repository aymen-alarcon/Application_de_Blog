<?php

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/post", function(){
    return "hi";
});

// Route::get("/post", postController::class);