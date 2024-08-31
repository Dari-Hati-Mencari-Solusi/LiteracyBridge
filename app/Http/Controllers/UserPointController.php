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
        $user = User::findOrFail($user->id);
        
        if ($user) {
            // User terautentikasi, bisa lanjut ke proses penyimpanan
            
            $willUpdate = [
                "point" => $user->point += 5.0
            ];
            
            $user->update($willUpdate);

            $updatedUser = User::findOrFail($user->id);
            return response()->json(['status' => 'success', 'points' => $updatedUser->point]);
        } else {            
            return response()->json(['status' => 'error', 'message' => 'User not authenticated'], 401);
        }
    }
}
