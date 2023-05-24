<?php

namespace App\Models;

use App\Models\Books;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publisher extends Model
{
    use HasFactory;

    // 1..* , bikin 1 publisher bisa punya banyak books
    public function books() {
        return $this->hasMany(Books::class);
    }

}
