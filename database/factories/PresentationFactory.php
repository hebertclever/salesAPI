<?php

namespace Database\Factories;

use App\Models\Presentation;
use Illuminate\Database\Eloquent\Factories\Factory;

class PresentationFactory extends Factory
{
    /**
     * O nome do modelo relacionado a essa factory.
     *
     * @var string
     */
    protected $model = Presentation::class;

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
