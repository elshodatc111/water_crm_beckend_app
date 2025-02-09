<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
class UserFactory extends Factory{
    protected $model = User::class; 
    protected static ?string $password;
    public function definition(): array{
        return [
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'type' => fake()->randomElement(['guard', 'currer']),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('12345678'),
        ];
    }
    public function unverified(): static{
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
