<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();

        for($i = 1; $i<=30; $i++) {
            Book::create([
                'publisher_id' => rand(1,4),
                'title' => $faker->words(1, true),
                'author' => $faker->name,
                'year' => $faker->year($startDate = '-20 years', $max = 'now') ,
                'synopsis' => $faker->text,
                'image' => $faker->imageURL($width = 640, $height = 480, 'books', false)
            ]);
        }
       
        // $book = new Book();
        // $book->publisher_id = "1";
        // $book->title = "Surat Cinta untuk Starla";
        // $book->author = "Virgoun Selingkuh";
        // $book->year = "2023";
        // $book->synopsis = "uvuvwewjncuhuhufhunnnnnnnnnnnnnnnnfuuuudewdeijdijeijdijxcnjnjcnjnc";
        // $book->image = "starla.jpg";
        // $book->save();

        // $book = new Book();
        // $book->publisher_id = "2";
        // $book->title = "Dilan Milea naik Angkot";
        // $book->author = "Sebastian Iqbal";
        // $book->year = "1991";
        // $book->synopsis = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde consequuntur rem accusantium nam nobis officia praesentium doloribus, odio cupiditate quae.";
        // $book->image = "dilan.jpg";
        // $book->save();

    }
}
