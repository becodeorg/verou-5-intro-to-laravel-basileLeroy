<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name("home");

Route::get("users", [UserController::class, 'index'])->name("showUsers");
Route::get("users/{id}", [UserController::class, 'show'])->name("showUser");

Route::get("posts", [PostController::class, 'index'])->name("showPosts");
Route::get("posts/{id}", [PostController::class, 'show'])->name("showPost");

Route::get("/register", [RegisterController::class, 'index'])->name("showRegister");
Route::post("/register", [RegisterController::class, 'create'])->name("handleRegister");
