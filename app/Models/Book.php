<?php

namespace App\Models;

use App\Models\Publisher;
use App\Models\Book_category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    // 1..1 , 1 buku bisa punya 1 publisher, karena di Model Publisher sudah pakai has
    public function publisher() {
        return $this->belongsTo(Publisher::class);
    }

    // pk 1..* ,  1 buku punya banyak book_category
    public function book_category() {
        return $this->hasMany(Book_category::class);
    }


}
