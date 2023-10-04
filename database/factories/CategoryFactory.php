<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * O nome do modelo relacionado a essa factory.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Defina o estado padrão do modelo.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            // Adicione outros campos aqui, se necessário.
        ];
    }
}
