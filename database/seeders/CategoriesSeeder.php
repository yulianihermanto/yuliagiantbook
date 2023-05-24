<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as faker;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = faker::create();

        for($i = 1; $i <= 5; $i++) {
            Category::create([
                'name' => $faker->words(1, true)
            ]);
        }

        // $category = new Category();
        // $category->name = "Romance";
        // $category->save();

        // $category = new Category();
        // $category->name = "Action";
        // $category->save();
    }
}
