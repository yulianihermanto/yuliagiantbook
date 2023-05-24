<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book_category extends Model
{
    use HasFactory;
    protected $table = "book_category";

    // fk, 1..1 , 1 book_category memiliki hanya 1 book saja
    public function books() {
        return $this->belongsTo(Book::class);
    }

    // fk, 1..1 , 1 book_category hanya memiliki 1 categories saja
    public function categories() {
        return $this->belongsTo(Categories::class);
    }

}
