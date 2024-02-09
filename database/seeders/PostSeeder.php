<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'titulo' => Str::random(10),
            'cuerpo' => Str::random(100),
            'imagen' => Str::random(25),
            'usuario_id' => 1,
            'categoria_id' => 1,
        ]);

        Post::factory(100)->create();
    }
}
