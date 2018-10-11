<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function showBook()
    {
        $books = Book::all();
        return view('book', compact('books'));
    }
}
