<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPointController extends Controller
{
    public function addPoints(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            // User terautentikasi, bisa lanjut ke proses penyimpanan
            $user->point += 5;
            // $user->save();

            return response()->json(['status' => 'success', 'points' => $user->point]);
        } else {
            // Tidak ada user yang terautentikasi
            return response()->json(['status' => 'error', 'message' => 'User not authenticated'], 401);
        }
    }
}
