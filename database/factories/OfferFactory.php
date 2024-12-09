<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'status' => $this->faker->boolean(),
            'company' => $this->faker->company(),
            'jobPosition' => $this->faker->jobTitle(),
            'web'=> $this->faker->url,
        ];
    }
}
