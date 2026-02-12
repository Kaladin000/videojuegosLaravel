<?php

namespace Database\Factories;

use App\Models\Desarrollador;
use App\Models\Editor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Videojuego>
 */
class VideojuegoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "titulo"=>$this->faker->unique()->word(),
            "descripcion"=>$this->faker->paragraph(),
            "numero"=>$this->faker->randomDigit(),
            "genero"=>$this->faker->randomElement(['Acción','Aventura', 'Rol','Estrategia', 'Deportes', 'Shooter', 'Puzzle', 'Plataformas']),
            "subgenero"=>$this ->faker->randomElement(['Hack n Slash','Looter shooter','Roguelike','RTS','MOBA','Novela visual','Plataformas 2D','Plataformas 3D']),
            "mes"=>$this->faker->month(),
            "año"=>$this->faker->year(),
            "editor_id"=>Editor::factory()->create(),
            "nombre_desarrollador"=>Desarrollador::factory()->create()
        ];
    }
}
