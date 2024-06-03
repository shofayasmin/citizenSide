<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Alternatives;
use App\Models\Bansos;
use App\Models\Contribution;
use App\Models\Iuran;
use App\Models\Kk;
use App\Models\laporan;
use App\Models\Organisasi;
use App\Models\Preference;
use App\Models\Rt;
use App\Models\Rumah;
use App\Models\SPK;
use App\Models\User;
use App\Models\Acara;
use App\Models\umkm;
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
        umkm::factory(4)->create();
        Acara::factory(10)->create();
        Kk::factory(10)->create();
        Iuran::factory(10)->create();
        Alternatives::factory(50)->create();
        Bansos::factory(10)->create();
        Rt::factory(10)->create();
        Rumah::factory(10)->create();
        laporan::factory(3)->create();
        Organisasi::factory(10)->create();
        Contribution::factory(10)->create();

        $this->call(CriteriaSeeder::class);
       



    }
}
