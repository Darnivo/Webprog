<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_categories')->insert([
            ['name' => 'Medical'],
            ['name' => 'Lifestyle'],
            ['name' => 'Women\'s Health'],
            ['name' => 'Disease Info'],
        ]);
    }
}
