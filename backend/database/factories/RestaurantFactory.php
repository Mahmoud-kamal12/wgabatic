<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name,
            'email' => fake()->unique()->email,
            'phone' => fake()->phoneNumber,
            'm_name' => fake()->firstName,
            'm_phone' => fake()->phoneNumber,
            'contact_email' => fake()->unique()->email,
            'password'  => Hash::make("123456789"),
            'cover' => str_replace('public/','' , fake()->image('public/uploads',640,480, null, true)),
            'logo'  => str_replace('public/','' , fake()->image('public/uploads',640,480, null, true)),
            'pickup_fee' => fake()->numberBetween(10,2),
            'pickup_time' => fake()->time,
            'country' => fake()->country,
            'city' => fake()->city,
            'Latitude' => fake()->latitude(),
            'Longitude'  => fake()->longitude,
            'description'  => fake()->text,
            'table_status' => fake()->randomElement([0,1])
        ];
    }
}
