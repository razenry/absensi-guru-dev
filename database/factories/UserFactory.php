<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'public_id'     => Str::uuid(),
            'name'          => fake()->name(),
            'email'         => fake()->unique()->safeEmail(),
            'password'      => static::$password ??= Hash::make('password'),
            'user_type'     => fake()->randomElement(['employee', 'student']),
            'employee_id'   => null,
            'student_id'    => null,
            'department'    => fake()->randomElement(['IT', 'HR', 'Finance', 'Student Affairs']),
            'position'      => fake()->jobTitle(),
            'phone'         => fake()->phoneNumber(),
            'is_active'     => true,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
}
