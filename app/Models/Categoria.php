<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Post;

class Categoria extends Model
{
    use HasFactory;
    protected $table = "categorias";

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function posts() : HasMany
    {
        return $this->hasMany(Post::class);
    }
}
