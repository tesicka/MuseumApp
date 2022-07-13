<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VisitorFactory extends Factory
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
        'email' => $this->faker->safeEmail(),
        'age' => $this->faker->numberBetween($min = 5, $max = 90),
        'museum_id'=> Museum::factory(),
        'state_id'=> State::factory(),

        ];
    }
}
