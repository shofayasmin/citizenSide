<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bansos>
 */
class BansosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul'                 => fake()->word(),
            'gambar'                => ('infobansos.png'),
            'jenis_bansos'          => fake()->randomElement(['Sembako', 'Tunai', 'Lain-lain']),
            'periode_bansos'        => fake()->numberBetween(1,3),
            'tanggal_penyaluran'    => fake()->dateTimeThisYear('2 months'),
            'jumlah_bansos'         => fake()->numberBetween(10,30),
        ];
    }
}
