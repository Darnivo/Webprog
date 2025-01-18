<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'username' => 'customer #' . $i,
                'password' => Hash::make('password__#' . $i * 100)
            ]);
        }

        $RandomNames = ['John', 'Doe', 'Jane', 'Smith', 'Michael', 'Jordan', 'Lebron', 'James', 'Kobe', 'Bryant'];

        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'username' => $RandomNames[rand(0, 9)] . '_' . $RandomNames[rand(0, 9)] . rand(1, 100),
                'password' => Hash::make('password__#' . $i * 100)
            ]);
        }
    }
}
