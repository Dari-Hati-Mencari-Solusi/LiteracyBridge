<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPreferenceDetail extends Model
{
    use HasFactory;

    protected $fillable = ["preference_id", "preference_type_id", "user_id"];    
}
