<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
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
            'category_ID' => fake() ->numberBetween(1,100),
            'company_ID' => fake() ->numberBetween(1,100),
            'created_at' => fake()->dateTimeBetween('-10 years', 'now'),
            'updated_at' => fake()->dateTimeBetween('-9 years', 'now'),
        ];
    }
}
