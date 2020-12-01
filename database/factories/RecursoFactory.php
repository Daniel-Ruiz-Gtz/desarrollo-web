<?php

namespace Database\Factories;

use App\Models\Recurso;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recurso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'categoria_id' => $this->faker->numberBetween(1, 5),
            'url' => $this->faker->url(),
            'titulo' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(),
        ];
    }
}
