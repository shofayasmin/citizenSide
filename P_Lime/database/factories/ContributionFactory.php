<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contribution>
 */
class ContributionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contribution_name'=>fake()->name,
            'payment_status'=>fake()->randomElement(['Belum Dibayar','Lunas']),
            'amount'=>fake()->numberBetween(1,10) * 100000
        ];
    }
}
