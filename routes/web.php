<?php

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

Route::get('/login', function () {
  return view('login', [
    'title' => 'login'
  ]);
});

Route::get('/', function () {
  return view('welcome', [
    'tittle' => 'welcome'
  ]);
});

Route::get('/register', function () {
  return view('sign-up', [
    'tittle' => 'SignUp'
  ]);
});

Route::get('/LandingPage', function () {
  return view('landingpage');
});

Route::get('/user-preferences', function () {
  return view('user-preferences');
});