<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::updateOrCreate([
            'name' => 'Admin',
            'email' => 'admin@se.com',
            'password' => bcrypt('Test@123'),
        ], [
            'name' => 'Admin',
            'email' => 'admin@se.com',
            'password' => bcrypt('Test@123'),
        ]);
    }
}
