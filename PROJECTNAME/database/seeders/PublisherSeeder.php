<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//add these 2
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        foreach (range(1, 10) as $index) {
            DB::table('publishers')->insert([
                'name' => $faker->company,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->companyEmail,
                'image' => $faker->imageUrl(200, 200, 'business', true, 'publisher')
            ]);
        }
    }
}
