<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Editor extends Model
{
    /** @use HasFactory<\Database\Factories\EditorFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre',
        'pais'
    ];

    protected $primaryKey = 'id';

    public function videojuegos():HasMany {
        return $this->hasMany(Videojuego::class);
    }
}
