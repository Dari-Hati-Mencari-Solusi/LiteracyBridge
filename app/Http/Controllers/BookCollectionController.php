<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookCollectionController extends Controller {
  public function index() {
    return view("user.books.book-collection");
  }
}
