<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserPointController;
use App\Http\Controllers\BookCollectionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserPreferenceController;

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
Route::get('/book', [BookCollectionController::class, "index"]);
Route::get('/books/search', [BookController::class, "search"])->name("books.search");
Route::get('/books/{book:slug}', [BookController::class, 'show'])->name('books.show');  

Route::middleware(["auth"])->group(function() {
  Route::get('/preference', [UserPreferenceController::class, "index"])->name("preference");
  Route::post('/preference', [UserPreferenceController::class, "store"]);
  Route::post('/tambah-poin', [UserPointController::class, 'addPoints'])->name('tambahPoin');
  
  Route::get('/books/read/{book:slug}', [BookController::class, 'read'])->name('books.read');
  Route::get('/profile', [ProfileController::class, 'index'])->name('profile');  
});


require __DIR__ . '/auth.php';