<?php

namespace Database\Seeders;

use App\Models\Organization;
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
            'email' => 'admin@se.com',
        ], [
            'name' => 'Admin',
            'email' => 'admin@se.com',
            'password' => bcrypt('Test@123'),
        ]);

        Organization::updateOrCreate(['name'=>'Timeless Memories'], [
            'name' => 'Timeless Memories',
            'email' => 'timelessmemories@example.com',
            'phone' => '0123456789',
            'address' => '123 Main St, Anytown, USA',
            'website' => 'https://timelessmemories.com',
            'motto' => 'We capture your precious moments and turn them into timeless memories.',
            'title' => 'Timeless Memories',
            'sublitle' => 'We capture your precious moments and turn them into timeless memories.',
            'logo' => 'images/logo.png',
            'description' => 'Timeless Memories',
            'banner_image' => 'images/banner_image.png',
            'facebook' => 'https://www.facebook.com/timelessmemories',
            'twitter' => 'https://twitter.com/timelessmemories',
            'linkedin' => 'https://www.linkedin.com/company/timelessmemories',
            'instagram' => 'https://www.instagram.com/timelessmemories',
        ]);
    }
}
