<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'nim' => $this->faker->unique()->randomNumber(8),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}