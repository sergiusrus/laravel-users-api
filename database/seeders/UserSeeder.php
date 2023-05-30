<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        $faker = \Faker\Factory::create();
        $password = Hash::make('userapi');

        User::create([
            'name' => 'Admin',
            'email' => 'user@api.com',
            'password' => $password,
        ]);

        for ($i = 0; $i < 29; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ]);
        }
    }
}
