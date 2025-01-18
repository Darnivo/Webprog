<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
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
            $categoryId = rand(1, 3);
            DB::table('products')->insert([
                'name' => $faker->words(2, true),
                'category_id' => $categoryId,
                'price' => rand(10,40)*500,
                'stock' => rand(0, 100),
                'imageURL' => "img/products/product-" . $categoryId . ".jpg"
            ]);
        }
    }
}
