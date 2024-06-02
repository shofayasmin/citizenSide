<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organisasi>
 */
class OrganisasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_organisasi' => fake()->unique()->word(),
            'ketua' => fake()->name,
            'wakil' => fake()->name,
            'jumlah_anggota' => fake()->numberBetween(1,4),
        ];
    }
}
