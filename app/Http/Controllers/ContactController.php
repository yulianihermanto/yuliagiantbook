<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Category;

class ContactController extends Controller
{
    
    public function index() {

        $categories = Category::all();

        return view('contact', [
            'categories' => $categories
        ]);
    }
}
