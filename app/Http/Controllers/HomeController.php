<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){    
      $latestBooks = Book::getSortedBooks(
        sortedColumn: "created_at",
        order: "desc"
      );

      $videos = Video::getVideos(4);

      if (Auth::check()) {                

        $literationBooks = Book::getSortedBooks(
          order: "desc",
          categoryName: "literasi"
        );        

        return view("user.landing",
          compact(
            "literationBooks", "latestBooks", "videos"
          )
        );
      }

      $favoriteBooks = Book::getSortedBooks(
        sortedColumn: "like",
        order: "desc"      
      );      

      return view(
        "user.welcome", 
        compact(
          "favoriteBooks", "latestBooks", "videos"
        )
      );
    }    
}
