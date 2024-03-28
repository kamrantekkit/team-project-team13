<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(RealProductSeeder::class);

        // Flush the indices
        Artisan::call('scout:flush', ['model' => 'App\\Models\\Product']);
        Artisan::call('scout:flush', ['model' => 'App\\Models\\User']);
        Artisan::call('scout:flush', ['model' => 'App\\Models\\Stock']);

        // Import the data into the indices
        Artisan::call('scout:import', ['model' => 'App\\Models\\Product']);
        Artisan::call('scout:import', ['model' => 'App\\Models\\User']);
        Artisan::call('scout:import', ['model' => 'App\\Models\\Stock']);

    }
}
