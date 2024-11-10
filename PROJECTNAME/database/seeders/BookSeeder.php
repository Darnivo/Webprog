<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


// add these 2
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create();
        
        foreach (range(1, 20) as $index) {
            DB::table('books')->insert([
                'publisher_id' => $faker->numberBetween(1, 10), // Assuming we have 10 publishers
                'title' => $faker->sentence(3),
                'author' => $faker->name,
                'year' => $faker->year,
                'synopsis' => $faker->paragraph,
                'image' => $faker->imageUrl(200, 300, 'books', true, 'book cover')
            ]);
        }

    }
}
