<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use App\Book;

class HomeController extends Controller
{
    /* The Main Index Page
    *
    *
    */
    public function index()
    {
        $catagories = Catagory::all();
        $recents = Book::orderBy('created_at','desc')->get();
        $title = Book::orderBy('title','asc')->get();
        $author = Book::orderBy('author','asc')->get();
        return view('index', compact('catagories', 'recents', 'title', 'author'));
    }

    public function create()
    {
        $catagories = Catagory::all();
        return view('addbook', compact('catagories'));
    }
}
