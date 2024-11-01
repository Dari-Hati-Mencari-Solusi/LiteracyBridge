<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
  /**
   * Display user registrastion view
   * 
   */
  public function create()
  {
    return view("user.auth.sign-up");
  }

  /**
   * Handle an incoming user registration request.
   * 
   */

  public function store(Request $request)
  {
    try {            
      $validatedData = $request->validate([
        "fullname" => "required|max:255",
        "email" => "required|email:dns|unique:users,email",
        "username" => "required|min:8|max:50",        
        "password" => "required|min:8|confirmed"
      ],[
        "fullname.required" => "Nama lengkap wajib diisi.",
        "fullname.max" => "Nama lengkap maksimal 255 karakter.",
        "email.required" => "Alamat email wajib diisi.",
        "email.email" => "Format alamat email tidak valid.",
        "email.unique" => "Alamat email sudah terdaftar.",
        "username.required" => "Username wajib diisi.",
        "username.min" => "Username harus minimal 8 karakter.",
        "username.max" => "Username tidak boleh lebih dari 50 karakter.",
        "password.required" => "Password wajib diisi.",
        "password.min" => "Password harus minimal 8 karakter.",
        "password.confirmed" => "Konfirmasi password tidak cocok."
    ]);

      $user = User::create([        
        "name" => $validatedData["fullname"],
        "email" => $validatedData["email"],
        "username" => $validatedData["username"],
        "password" => Hash::make($validatedData["password"]),        
      ]);

      Auth::login($user);
      
      return redirect()
        ->intended("/preference")
        ->with('success', 'Pendaftaran berhasil! Silahkan login😊');

    } catch (\Illuminate\Validation\ValidationException $e) {
      return redirect()->back()
        ->withErrors(['error_message' => $e->getMessage()])
        ->withInput();
    }
  } 
}
