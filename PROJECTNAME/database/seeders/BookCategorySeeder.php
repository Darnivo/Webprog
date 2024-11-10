<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\BookCategory; // add this

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 20; $i++){
    		BookCategory::insert([
                'book_id' => rand(1,20),
                'category_id' => rand(1,4)
    		]);
    	}
    }
}
