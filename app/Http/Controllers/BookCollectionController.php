<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookCollectionController extends Controller {
  public function index() {
    $books = Book::limit(6)->get(); 
    $newestBooks = Book::orderBy("publication", "desc")->limit(5)->get();
    $mostCollectedBooks = Book::withCount("bookmarks")->orderBy("bookmarks_count", "desc")->limit(4)->get(); 
    $mostPointBooks = Book::where("point", "!=", 0)->orderBy("point", "desc")->limit(5)->get();

    return view("user.books.book-collection", compact("books", "mostCollectedBooks", "newestBooks", "mostPointBooks"));
  }
}
