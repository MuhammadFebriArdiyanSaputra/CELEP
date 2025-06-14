<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Tana',
            'email' => 'nyrobyte@gmail.com',
            'password' => Hash::make('admin1234'),
            'first_name' => 'Tana',
            'last_name' => 'Nyrobyte',
            'mobile_phone' => '+1234567890',
            'birth_date' => '2000-01-01',
            'role' => 'admin',
            'isPremium' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Anta',
            'first_name' => 'Anta',
            'last_name' => 'Atrizki',
            'mobile_phone' => '+1234567890',
            'birth_date' => '2004-04-15',
            'email' => 'Atrizki.anta@gmail.com',
            'password' => Hash::make('anta1234'),
            'role' => 'user',
            'isPremium' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        
        $faker = Faker::create();
        for ($i = 0; $i < 5; $i++) {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;

            DB::table('users')->insert([
                'name' => $firstName . ' ' . $lastName,
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $faker->unique()->safeEmail,
                'mobile_phone' => $faker->phoneNumber,
                'birth_date' => $faker->date('Y-m-d', '2005-01-01'),
                'password' => Hash::make('password'),
                'role' => 'user',
                'isPremium' => (bool)random_int(0, 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
