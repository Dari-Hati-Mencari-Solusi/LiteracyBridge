<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPreference extends Model
{
    use HasFactory;
    
    protected $guarded = ["id"];    

    protected $with = ["user_preference_types"];

    public function user_preference_types() {
      return $this->hasMany(UserPreferenceType::class, "preference_id");
    }
}
