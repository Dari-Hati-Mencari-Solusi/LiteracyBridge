<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
  public function show(Book $book)
  {
    return view('user.books.show', ['book' => $book]);
  }

  public function read(Book $book)
  {            
    if (!file_exists(public_path('books/' . $book->pdf_file))) {
      abort(404, 'PDF not found');
    }
   
    return view('user.books.read', ['book' => $book]);
  }

  public function search(Request $request){

    $query = $request->input('s');
    
    $books = Book::where('title', 'LIKE', "%{$query}%")
              ->orWhere('author', 'LIKE', "%{$query}%")                 
              ->get();

    return view("user.books.searchbook", compact("books", "query"));
  }
}
