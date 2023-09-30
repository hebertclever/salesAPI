<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->numerify('ART###'),
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(),
            // Se você não tiver tabelas de categories e presentations, pode comentar as duas linhas abaixo.
            'category_id' => $this->faker->numberBetween(1, 10),
            'presentation_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
