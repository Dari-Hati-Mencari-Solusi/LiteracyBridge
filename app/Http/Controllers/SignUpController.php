<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
  public function index()
  {
    return view("user.auth.sign-up");
  }

  public function store(Request $request)
  {
    try {            
      $validatedData = $request->validate([
        "fullname" => "required",
        "email" => "required|email:dns|unique:users,email",
        "username" => "required|min:5|max:50",        
        "password" => "required|min:5|confirmed"
      ]);

      $user = User::create([        
        "name" => $validatedData["fullname"],
        "email" => $validatedData["email"],
        "username" => $validatedData["username"],
        "password" => Hash::make($validatedData["password"]),
        "role" => "user"
      ]);

      Auth::login($user);
      
      return redirect()
        ->intended("/preference")
        ->with('success', 'Pendaftaran berhasil! Silahkan login😊');

    } catch (\Illuminate\Validation\ValidationException $e) {
      return redirect()->back()
        ->withErrors(['error_message' => 'Terjadi kesalahan, cek kembali isianmu!'])
        ->withInput();
    }
  } 
}
