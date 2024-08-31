<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller {
  public function show($id)
    {
        // Ambil detail buku berdasarkan ID
        $book = Book::findOrFail($id);

        // Return view dengan detail buku
        return view('books.show', ['book' => $book]);
    }
    public function read($id)
    {
        // Ambil detail buku berdasarkan ID
        $book = Book::findOrFail($id);

        // Pastikan file PDF tersedia
        // if (!file_exists(public_path('pdfs/' . $book->pdf_file))) {
        //     abort(404, 'PDF not found');
        // }

        // Kembalikan view dengan detail buku
        return view('books.read', ['book' => $book]);
    }
}
