<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => 'Post '.$this->faker->word,
            'cuerpo' => $this->faker->text(100),
            'imagen' => $this->faker->text(25),
            'usuario_id' => rand(1, 10),
            'categoria_id' => rand(1, 10),
        ];
    }
}
