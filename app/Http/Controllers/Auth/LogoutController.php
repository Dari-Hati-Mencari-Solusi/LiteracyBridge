<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
  public function index(Request $req)
  {
    Auth::logout();

    $req->session()->invalidate();
    $req->session()->regenerateToken();

    return redirect('/');
  }
}
