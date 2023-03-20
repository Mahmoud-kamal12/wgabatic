<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Table>
 */
class TableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "number" => fake()->numberBetween(1,50),
            "cap" => fake()->numberBetween(1,12),
            'price' => fake()->numberBetween(500,1000)
        ];
    }
}
