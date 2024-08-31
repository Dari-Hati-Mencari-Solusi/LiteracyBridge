<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookCollectionController extends Controller {
  public function index() {
    $books = Book::all();
    return view("user.books.book-collection", compact("books"));
  }
}
