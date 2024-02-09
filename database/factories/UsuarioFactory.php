<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{

    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
            'apellidos' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
