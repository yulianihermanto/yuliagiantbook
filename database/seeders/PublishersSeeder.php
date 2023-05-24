<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as faker;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        $faker = faker::create('id_ID');

        Publisher::create([
            'name' => "Gramedia",
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'email' => $faker->email,
            'image' => "https://mir-s3-cdn-cf.behance.net/project_modules/disp/51c8c811397453.560f71c80f78b.jpg"   
        ]);

        Publisher::create([
            'name' => "Penerbit Erlangga",
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'email' => $faker->email,
            'image' => "https://upload.wikimedia.org/wikipedia/id/thumb/5/5b/Esis.jpg/200px-Esis.jpg"   
        ]);

        Publisher::create([
            'name' => "Bukutama",
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'email' => $faker->email,
            'image' => "https://cdn.kibrispdr.org/data/760/logo-penerbit-buku-2.jpg"   
        ]);

        Publisher::create([
            'name' => "Leander Publishing",
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'email' => $faker->email,
            'image' => "https://dcassetcdn.com/design_img/2695990/563065/563065_14643290_2695990_7440e09e_image.jpg"   
        ]);

        // for($i= 1; $i <= 4; $i++) {
        //     Publisher::create([
        //         'name' => $faker->name,
        //         'address' => $faker->address,
        //         'phone' => $faker->phoneNumber,
        //         'email' => $faker->email,
        //         'image' => $faker->imageUrl($width = 640, $height = 480, 'book')    
        //     ]);
        // }
        
        // $publisher = new Publisher();
        // $publisher->name = "Nikita Marzani";
        // $publisher->address = "Jakarta";
        // $publisher->phone = "089423749747";
        // $publisher->email = "nikitamirzani@gmail.com";
        // $publisher->image = "nikita.jpeg";
        // $publisher->save();

        // $publisher = new Publisher();
        // $publisher->name = "Syalala";
        // $publisher->address = "Tangerang";
        // $publisher->phone = "0930982487683";
        // $publisher->email = "syalala@gmail.com";
        // $publisher->image = "syalala.jpeg";
        // $publisher->save();

    }
}
