<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->words(2,true),
            'brand_id'=>fake()->numberBetween(1,10),
            'description'=>fake()->paragraph(),
            'price'=>fake()->numberBetween(1,100),
            'num_color'=>fake()->numberBetween(1,3),
            'image'=>fake()->imageUrl(),
            'gender'=>fake()->randomElement(['Male','Female','Kids'])
        ];
    }
}
