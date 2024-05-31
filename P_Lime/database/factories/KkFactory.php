<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kk>
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
            'no_kk' => fake()->unique()->nik(),
            'alamat' => fake()->text(75),
            'nik_kepala_keluarga' => fake()->unique()->nik(),
            'jumlah_usia_produktif' => fake()->numberBetween(1,4),
            'jumlah_anggota_kk' => fake()->numberBetween(1,4),
            'jumlah_usia_lanjut' => fake()->numberBetween(1,4),
        ];
    }
}
