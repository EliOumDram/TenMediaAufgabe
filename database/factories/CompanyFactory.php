<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'location' => fake()->city(),
            'streetname' => fake()->streetName(),
            'streetnumber' => fake()->randomNumber(3),
            'postcode' => fake()->randomNumber(5,5),
            'created_at' => fake()->dateTimeBetween('-10 years', 'now'),
            'updated_at' => fake()->dateTimeBetween('-9 years', 'now'),
        ];
    }
}
