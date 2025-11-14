<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Properties>
 */
class PropertiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition(): array
{
    return [
        'title' => $this->faker->sentence(4),
        'description' => $this->faker->paragraph(3),
        'property_type_id' => $this->faker->numberBetween(1, 5), // adjust based on how many types you have
        'address' => $this->faker->streetAddress(),
        'city' => $this->faker->city(),
        'area' => $this->faker->word(), // neighborhood / locality name
        'size_in_sqft' => $this->faker->numberBetween(500, 3500),
        'price' => $this->faker->numberBetween(50000, 50000000),
        'created_at' => now(),
        'updated_at' => now(),
    ];
}
}
