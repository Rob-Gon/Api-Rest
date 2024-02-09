<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Usuario;
use App\Models\Categoria;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $fillable = [
        'titulo',
        'cuerpo',
        'imagen',
        'usuario_id',
        'categoria_id',
    ];

    public function usuario() : BelongsTo
    {
        return $this->belongsTo(Usuario::class);
    }

    public function categoria() : BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
}
