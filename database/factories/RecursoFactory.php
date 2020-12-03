<?php

namespace Database\Factories;

use App\Models\Recurso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
        $numeroUsuarios = DB::table('users')->count();
        return [
            'categoria_id' => $this->faker->numberBetween(1, 5),
            'user_id' => $this->faker->numberBetween(1, $numeroUsuarios),
            'url' => $this->faker->url(),
            'titulo' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(),
            'aprovado' => $this->faker->numberBetween(0, 1),
        ];
    }
}
