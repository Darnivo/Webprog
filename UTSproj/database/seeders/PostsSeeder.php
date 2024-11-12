<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\posts;
use faker\Factory as Faker;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        //medical, lifestyle, women, diseases        
        $titles = [
            'The Future of Medicine',
            'Boosting Your Health Daily',
            'Women and Chronic Illness',
            'Managing Common Diseases',
            'Diet’s Role in Health',
            'Hormones and Mental Health',
            'The Importance of Screenings',
            'Natural Stress Relief Tips',
            'Sleep and Heart Health',
            'Fitness and Mental Wellbeing',
            'Navigating Life Changes',
            'Understanding Autoimmune Issues'
        ];


        for($i = 0; $i < 12; $i++) {
            posts::insert([
                'title' => $titles[$i],
                'category_id' => ($i%4)+1,
                'author' => $faker->name,
                'published_at' => $faker->dateTimeBetween('-1 year', '+1 year'),
                'content' => $faker->paragraphs(2, true),
                'imageUrl' => '/img/c' . $i . '.jpg'
            ]);
        }

    }
}
