<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'job_title' => $this->faker->jobTitle(),
            'joining_date' => $this->faker->date(),
            'salary' => $this->faker->randomFloat(2,10000,30000),
            'email' => $this->faker->unique()->safeEmail(),
            'mobile_no' => $this->faker->phoneNumber(),
            'address' => $this->faker->address()

        ];
    }
}
