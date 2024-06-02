<?php

namespace Database\Seeders;

use App\Models\laporan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        laporan::factory()->count(4)->create();
    }
}
