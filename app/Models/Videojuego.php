<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Videojuego extends Model
{
    /** @use HasFactory<\Database\Factories\VideojuegoFactory> */
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'numero',
        'genero',
        'subgenero',
        'mes',
        'año',
        'nombre_desarrollador',
        'editor_id'
    ];


    public function desarrollador():BelongsTo {
        return $this->belongsTo(Desarrollador::class, 'nombre_desarrollador', 'nombre_desarrollador');
    }

    public function editor():BelongsTo {
        return $this->belongsTo(Editor::class);
    }

    public function perfil():HasOne {
        return $this->hasOne(Perfil::class);
    }

    public function complecion():BelongsToMany {
        return $this->belongsToMany(User::class)->withPivot(['completado', 'fecha_completado'])->withTimestamps();
    }
}
