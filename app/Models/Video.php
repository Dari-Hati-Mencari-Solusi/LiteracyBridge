<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  use HasFactory;

  public static function getVideos($limit): Collection {
    return self::limit($limit)->get();
  }
}
