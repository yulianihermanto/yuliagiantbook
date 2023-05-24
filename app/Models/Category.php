<?php

namespace App\Models;

use App\Models\Book_category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    // pk, 1..* , 1 categories bisa punya banyak book_category
    public function book_category() {
        return $this->hasMany(Book_category::class);
    }
}
