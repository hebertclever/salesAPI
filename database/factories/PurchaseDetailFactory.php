<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PurchaseDetail>
 */
class PurchaseDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'purchase_id' => $this->faker->numberBetween(1, 10),
            'item_id' => $this->faker->numberBetween(1, 10),
            'purchase_price' => $this->faker->randomFloat(2, 1, 100),
            'sale_price' => $this->faker->randomFloat(2, 1, 150),
            'initial_stock' => $this->faker->numberBetween(10, 100),
            'current_stock' => $this->faker->numberBetween(0, 100),
            'production_date' => $this->faker->date(),
            'expiry_date' => $this->faker->date(),
        ];
    }
}
