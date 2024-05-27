<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SPK>
 */
class SPKFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'luas_rumah' => $this->faker->randomFloat(1, 20, 30),
            'gaji' => $this->faker->numberBetween(2, 10) * 500000,
            'status' => $this->faker->randomElement(['Sudah Kawin', 'Sudah Kawin Sudah ada Anak', 'Sudah Kawin Belum ada Anak', 'Belum Kawin']),
            'jumlah_usia_lanjut' => $this->faker->numberBetween(0, 4),
            'jarak_domisili' => $this->faker->numberBetween(1, 1000),
        ];
    }
}
