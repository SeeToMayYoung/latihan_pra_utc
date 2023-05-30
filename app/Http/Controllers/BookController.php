<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();

        return view('home', compact('books'));
    }

    public function detail($id){

        $book = Book::find($id);

        return view('detail', compact('book'));
    }
}
