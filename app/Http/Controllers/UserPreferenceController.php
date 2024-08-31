<?php

namespace App\Http\Controllers;

use App\Models\UserPreference;
use App\Models\UserPreferenceDetail;
use Illuminate\Http\Request;

class UserPreferenceController extends Controller
{
  public function index()
  {
    $preferences = UserPreference::all();

    return view("user.auth.preference", compact("preferences"));
  }

  public function store(Request $request) {
    $selectedPreferences = $request->input('preferences', []);
    
    // id = preference_id and preference_type_id
    
    foreach ($selectedPreferences as $preference) {
      $preference_ids = explode("_", $preference);

      $formatPreference = [
        "user_id" => auth()->id(),
        "preference_id" => $preference_ids[0],
        "preference_type_id" => $preference_ids[1],
      ];

      UserPreferenceDetail::create($formatPreference);
    }
    
    return redirect()->route("home");
  }
}
