<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SaleDetail>
 */
class SaleDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sale_id' => $this->faker->numberBetween(1, 10),
            // Quando você tiver a tabela de detalhes de compra pronta, você pode descomentar a linha abaixo
            'purchase_detail_id' => $this->faker->numberBetween(1, 10),
            'quantity' => $this->faker->numberBetween(1, 10),
            'sale_price' => $this->faker->randomFloat(2, 1, 100),
            'discount' => $this->faker->randomFloat(2, 0, 1),
        ];
    }
}
