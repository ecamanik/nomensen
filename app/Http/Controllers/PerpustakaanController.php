<?php

namespace App\Http\Controllers;

use App\Models\Book;

class PerpustakaanController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('perpustakaan', compact('books'));
    }
}