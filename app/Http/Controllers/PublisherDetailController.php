<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PublisherDetailController extends Controller
{
    public function index(Publisher $publisher) {
        $books = Book::where('publisher_id', $publisher->id)->get();
        $categories = Category::all();

        return view('publisherdetail', [
            'publisher'=> $publisher,
            'categories' => $categories,
            'books' => $books
        ]);
    }
}
