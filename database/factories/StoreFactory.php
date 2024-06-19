<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(2,true),
            'description' => fake()->sentence,
            'about' => fake()->paragraph(3, true),
            'phone' => fake()->e164PhoneNumber(),
            'whatsapp' => fake()->e164PhoneNumber(),
        ];
    }
}
