<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'mdkam02ali@gmail.com',
            'phone' => '07311789880',
            'password' => Hash::make("Password12"),
            'is_admin' => true,
        ]);

        User::factory()->count(10)->create();
    }
}
