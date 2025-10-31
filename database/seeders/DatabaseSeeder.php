<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();

        User::create([
            'name' => 'Jakub',
            'email' => 'hrncir@zondy.cz',
            'password' => bcrypt('Zondy2025!'),
        ]);

        EventCategory::factory(10)->create();
        Lecturer::factory(3)->create();
        Event::factory(16)->create();
    }
}
