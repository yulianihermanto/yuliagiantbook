<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Book_category;
use App\Http\Controllers\Controller;
use App\Models\Book;

class CategoryController extends Controller
{
    public function index() {

        // nama atributnya ini sama ga ya sama value yang dikirim
        $bookc = Book_category::where('category_id', request('id'))->pluck('book_id');
        $books = Book::whereIn('id', $bookc)->get();
        $category = Category::find(request('id'));
        $categories = Category::all();
        

        return view('category', [
            'books' => $books,
            'category' => $category,
            'categories' => $categories,
        ]);
    }
}

