<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
  public function show(Book $book)
  {
    return view('books.show', ['book' => $book]);
  }

  public function read(Book $book)
  {            
    if (!file_exists(public_path('books/' . $book->pdf_file))) {
      abort(404, 'PDF not found');
    }
   
    return view('books.read', ['book' => $book]);
  }
}
