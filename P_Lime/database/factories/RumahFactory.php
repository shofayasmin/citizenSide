<?php

namespace Database\Factories;

use App\Models\Warga;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rumah>
 */
class RumahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nik_pemilik'=> Warga::inRandomOrder()->first()?->nik,
            'alamat'=>fake()->text(7),
            'luas_bangunan'=>fake()->numberBetween(1,50),
            'luas_tanah'=>fake()->numberBetween(1,50),
            'jumlah_anggota_kk'=>fake()->numberBetween(1,4),
        ];
    }
}
