<?php

use App\Http\Controllers\BookCollectionController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UserPreferenceController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, "index"])->name("home");
Route::get("/book-collection", [BookCollectionController::class, "index"]);
Route::get("book/{book:slug}", [BookController::class, "detailBook"]);

Route::middleware(["guest"])->group(function() {
  Route::get('/login', [LoginController::class, "index"])->name("login");
  Route::get('/signup', [SignUpController::class, "index"])->name("register");

});

Route::middleware(["auth"])->group(function() {
  Route::get('/preference', [UserPreferenceController::class, "index"])->name("preference");
  Route::post('/preference', [UserPreferenceController::class, "store"]);
  Route::post('/logout', [LogoutController::class, "index"])->name("logout");
});


// Login & Register
Route::post('/login', [LoginController::class, "login"]);
Route::post("/signup", [SignUpController::class, "store"]);

// profile
Route::get('/profile', function () {
  return view('user.profile',
);
});
