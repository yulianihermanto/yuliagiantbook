<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PublisherController extends Controller
{
    public function index() {
        
        $books = Book::all();
        $categories = Category::all();
        $publisher = Publisher::all();
        
        return view('publisher', [
            'books' => $books,
            'categories' => $categories,
            'publisher' => $publisher
        ]);
    }
}
