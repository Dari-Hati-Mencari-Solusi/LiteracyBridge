<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    use HasFactory;
    
    public static function getSortedBooks($sortedColumn = "id", $order = "asc", $limit = 4, $categoryName = null): Collection
    {
        // Query dasar untuk mengambil buku
        $query = self::orderBy($sortedColumn, $order);

        // Cek apakah kategori disediakan untuk filter
        if ($categoryName) {
            $query->whereHas('book_categories', function ($q) use ($categoryName) {
                $q->where('name', $categoryName);
            });
        }

        // Batasi jumlah hasil dan ambil datanya
        return $query->limit($limit)->get();
    }

    public function book_categories():BelongsToMany {
      return $this->belongsToMany(BookCategory::class, 'book_category_details', 'book_id', 'book_category_id'); 
    }

    public static function getRecommendedBooksByUserPreference($byName = "genre", $user = null){
        // return DB::table("user_preference_details")->where("user");
    }

    public function bookmarks() : HasMany {
        return $this->hasMany(Bookmark::class, "book_id");
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
