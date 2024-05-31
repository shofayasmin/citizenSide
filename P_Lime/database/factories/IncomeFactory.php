<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Income>
 */
class IncomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'income_name' => fake()->text(),
            'income_type' => fake()->randomElement(['Iuran Warga', 'Sumbangan', 'Usaha RW', 'Bantuan Pemerintah']),
            'amount' => fake()->numberBetween(0, 1000000000),
            'description' => fake()->text(),
        ];
    }
}
