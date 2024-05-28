<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Organisasi;
use App\Models\SPK;
use App\Models\User;
use App\Models\Acara;
use App\Models\Warga;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Warga::factory(10)->create();
        User::factory(10)->create();
        SPK::factory(10)->create();
        Acara::factory(10)->create();
    }
}
