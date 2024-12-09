<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 20 user records
        for ($i = 1; $i <= 20; $i++) {
            User::create([
                'avatar' => '/uploads/avatar.jpg',
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@example.com',
                'role' => $i === 1 ? 'admin' : 'user', // First user as admin, others as user
                'email_verified_at' => now(),
                'password' => Hash::make('123'), // Default password
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
