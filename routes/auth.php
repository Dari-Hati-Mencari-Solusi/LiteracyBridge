<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\Auth\LogoutController;

Route::middleware(["guest"])->group(function() {
  Route::get('/login', [LoginController::class, "create"])->name("login");
  Route::post('/login', [LoginController::class, "store"]);

  Route::get('/signup', [SignUpController::class, "create"])->name("register");
  Route::post("/signup", [SignUpController::class, "store"]);
});


Route::middleware(["auth"])->group(function() {
  Route::post('/logout', [LogoutController::class, "index"])->name("logout");
});