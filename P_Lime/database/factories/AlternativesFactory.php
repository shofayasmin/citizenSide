<?php

namespace Database\Factories;

use App\Models\Rumah;
use App\Models\Kk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alternatives>
 */
class AlternativesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rumah_id'                  =>Rumah::inRandomOrder()->first()->rumah_id,
            'name'                      =>Kk::inRandomOrder()->first()->nik_kepala_keluarga,
            'jumlah_usia_produktif'     =>fake()->numberBetween(1,10),
            'jumlah_anggota_keluarga'   =>fake()->numberBetween(1.10),
            'kondisi_rumah'             =>fake()->numberBetween(1,10),
            'jumlah_usia_lanjut'        =>fake()->numberBetween(1,2),
            'pendapatan_total'          =>fake()->numberBetween(1,30) * 100000,
        ];
    }
}
