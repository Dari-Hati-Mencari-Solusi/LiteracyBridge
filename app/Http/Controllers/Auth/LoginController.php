<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function create()
  {    
    return view("user.auth.login");    
  }

  public function store(Request $request) {
    $credentials = $request->validate([
      "email" => "required|email",
      "password" => 'required'
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      $user = Auth::user();

      if ($user->role === "user") {
        return redirect()->intended("/");
      } else {
        Auth::logout();
        return back()->with("error", "Login gagal, cek kembali email atau passwordmu!");
      }

    }

    return back()
      ->with("error", "Login gagal, cek kembali email atau passwordmu!")
      ->withInput();
  }
}
