<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert([
                'username' => 'luthfi_bot' . $i,
                'name' => $faker->name,
                'email' => 'luthfi_bot' . $i . '@google.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password' . $i),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
