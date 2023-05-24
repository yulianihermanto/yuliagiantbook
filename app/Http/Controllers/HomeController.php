<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index() {
        
        $books = Book::all();
        $categories = Category::all();
        
        return view('home', [
            'books' => $books,
            'categories' => $categories
        ]);
    }
}
