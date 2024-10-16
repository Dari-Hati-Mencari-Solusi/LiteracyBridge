<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class forgotPasswordController extends Controller
{

   public function index() {
    return view('user.auth.forgot-password');
   }

}