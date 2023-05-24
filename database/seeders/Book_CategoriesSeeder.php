<?php

namespace Database\Seeders;

use App\Models\Book_category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as faker;

class Book_CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();
        
        for($i = 1; $i<=30; $i++) {
            Book_category::create([
                'book_id' => $i,
                'category_id' => rand(1,5),
            ]);
        }

        // yg id di skip karena otomatis
        // $book_category = new Book_category();
        // $book_category->book_id = "1";
        // $book_category->category_id = "1";
        // $book_category->save();

        // $book_category = new Book_category();
        // $book_category->book_id = "2";
        // $book_category->category_id = "2";
        // $book_category->save();
    }
}
