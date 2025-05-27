<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            'password' => Hash::make('admin1234'), // bcrypt
            'role' => 'admin',
            'isPremium' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Anta',
            'email' => 'Atrizki.anta@gmail.com',
            'password' => Hash::make('anta1234'),
            'role' => 'user',
            'isPremium' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        for ($i = 2; $i <= 5; $i++) {
            DB::table('users')->insert([
                'name' => 'User ' . Str::random(5),
                'email' => 'user' . $i . '@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'isPremium' => (bool)random_int(0, 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
