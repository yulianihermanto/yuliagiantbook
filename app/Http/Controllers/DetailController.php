<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DetailController extends Controller
{
    // jangan lupa disambungin sama book
    public function index(Book $book) {
        $categories = Category::all();

        return view('detail', [
            'categories'=> $categories,
            'book' => $book
        ]);
    }
}
