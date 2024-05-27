<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model:Kk>
 */
class KkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_kk' => fake()->userName(),
            'alamat' => fake()->userName(),
            'nik_kepala_keluarga' => fake()->userName(),
            'jumlah_usia_produktif' => fake()->userName(),
            'jumlah_anggota_kk' => fake()->userName(),
            'jumlah_usia_lanjut' => fake()->userName(),
        ];
    }
}
