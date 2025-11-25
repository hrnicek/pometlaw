<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\Lecturer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'hrncir@zondy.cz'],
            [
                'name' => 'Jakub',
                'password' => bcrypt('Zondy2025!'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'info@pometlaw.cz'],
            [
                'name' => 'Admin',
                'password' => bcrypt('Pomelo2025!'),
            ]
        );

        EventCategory::factory(10)->create();
        Lecturer::factory(3)->create();
        Event::factory(16)->create();
        Article::factory(12)->create();
    }
}
