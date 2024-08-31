<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index()
  {    
    return view("user.auth.login");    
  }

  public function login(Request $request) {
    $credentials = $request->validate([
      "email" => "required|email",
      "password" => 'required'
    ]);

    if (Auth::attempt($credentials)) {
      $request
        ->session()
        ->regenerate();

      $user = Auth::user();

      if ($user->role === "user") {
        return redirect()->intended("/");
      } else {
        Auth::logout();
        return back()
          ->with("error", "Login gagal, cek kembali email atau passwordmu!");
      }

    }

    return back()
      ->with("error", "Login gagal, cek kembali email atau passwordmu!")
      ->withInput();
  }
}
