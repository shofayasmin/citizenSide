<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
<<<<<<< HEAD

use App\Models\Citizen;
use App\Models\User;
=======
>>>>>>> bdf85523fa8b004315ff29b97ed4e7618e8c0020
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
<<<<<<< HEAD
        Citizen::factory(10)->create();
        User::factory(10)->create();
=======
>>>>>>> bdf85523fa8b004315ff29b97ed4e7618e8c0020
    }
}
