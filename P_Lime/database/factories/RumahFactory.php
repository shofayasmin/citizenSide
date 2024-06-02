<?php

namespace Database\Factories;

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
            'nama_pemilik'=>fake()->name,
            'alamat'=>fake()->text(7),
            'luas_bangunan'=>fake()->numberBetween(1,50),
            'luas_tanah'=>fake()->numberBetween(1,50),
            'jumlah_anggota_kk'=>fake()->numberBetween(1,4),
        ];
    }
}
