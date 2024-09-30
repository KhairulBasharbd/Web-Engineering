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
            'name' => $this->faker->name,
            'job_title' =>$this->faker->jobTitle,
            'joining_date' =>$this->faker->date,
            'salary'=>$this->faker->randomFloat(2,50000,5000),
            'email' =>$this->faker->email,
            'mobile_no' =>$this->faker->phoneNumber,
            'address' =>$this->faker->address
        ];
    }
}
