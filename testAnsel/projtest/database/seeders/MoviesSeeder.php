<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\movies;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0 ;$i <=20; $i++){
            movies::insert([
                'Movie Name' => fake()->sentence(3),
                'Location' => fake()->randomElement(['Jakarta','Tangerang']),
                'Synopsis' => fake()->text(),
                'Rating' => fake()->numberBetween(1,5),
                'Release-date' => fake()->dateTimeBetween('2024-10-01','2024-11-01')
            ]);
        }
    }
}
