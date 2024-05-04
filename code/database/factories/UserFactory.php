<?php

namespace Database\Factories;

<<<<<<< HEAD
use App\Models\Citizen;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

=======
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
>>>>>>> bdf85523fa8b004315ff29b97ed4e7618e8c0020

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
<<<<<<< HEAD
        
        return [
            'username' => fake()->userName(),
            'user_nik' => Citizen::inRandomOrder()->first()?->nik,
            'role' => fake()->randomElement(['admin', 'rt', 'rw', 'secretary', 'citizen']),
            'password' => static::$password ??= Hash::make('password'),
          ];
=======
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
>>>>>>> bdf85523fa8b004315ff29b97ed4e7618e8c0020
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
