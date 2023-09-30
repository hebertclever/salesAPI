<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => $this->faker->numberBetween(1, 10),
            'worker_id' => $this->faker->numberBetween(1, 10),
            'date' => $this->faker->date(),
            'receipt_type' => $this->faker->word,
            'series' => $this->faker->word,
            'correlative' => $this->faker->word,
            'vat' => $this->faker->randomFloat(2, 0, 1),
            'status' => $this->faker->randomElement(['completed', 'pending']),
        ];
    }
}
