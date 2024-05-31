<?php

namespace Database\Factories;

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
            'name'=>fake()->name(),
            'luas_rumah'=>fake()->numberBetween(1,100),
            'gaji'=>fake()->numberBetween(10,30) * 100000,
            'status'=>fake()->numberBetween(0,1),
            'jumlah_usia_lanjut'=>fake()->numberBetween(0,4),
            'jarak_domisili'=>fake()->numberBetween(1,30),
        ];
    }
}
