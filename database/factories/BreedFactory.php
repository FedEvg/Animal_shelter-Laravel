<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Breed>
 */
class BreedFactory extends Factory
{

    public function definition()
    {
        return [
            'kind_id' => $this->faker->randomElement([0, 1]),
            'name' => fake()->word(),
        ];
    }
}
