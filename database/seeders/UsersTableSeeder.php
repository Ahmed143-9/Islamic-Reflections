<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $users = [];

        for ($i = 0; $i < 10; $i++) {
            $user = [
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'age' => rand(18, 40),
                'city' => $faker->city,
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ];

            // Insert into DB
            DB::table('users')->insert($user);

            // Add to return array
            $users[] = $user;
        }

        // Return inserted data as JSON (for CLI/console only)
        echo json_encode($users, JSON_PRETTY_PRINT);
    }
}
