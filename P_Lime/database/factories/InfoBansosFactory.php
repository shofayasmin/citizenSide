<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InfoBansos>
 */
class InfoBansosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => ('infobansos.png'),
            'title' => fake()->randomElement(['Pemerintah', 'Swasta']),
            'jenis_bansos' => fake()->randomElement(['Sembako', 'Tunai', 'Lain-lain']),
            'periode_bansos' => fake()->dateTime()
        ];
    }
}
