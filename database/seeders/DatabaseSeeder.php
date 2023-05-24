<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\BooksSeeder;
use Database\Seeders\CategoriesSeeder;
use Database\Seeders\PublishersSeeder;
use Database\Seeders\Book_CategoriesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategoriesSeeder::class,
            PublishersSeeder::class,
            BooksSeeder::class,
            Book_CategoriesSeeder::class,
            
        ]);
        
        
    }
}
