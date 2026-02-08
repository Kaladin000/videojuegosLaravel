<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perfil>
 */
class PerfilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "precio"=>$this->faker->randomFloat(),
            "duracion"=>$this->faker->randomFloat(),
            "recomendaciones_positivas_steam"=>$this->faker->randomDigit(),
            "plataforma"=>$this->faker->randomElement(['PC', 'NINTENDO_SWITCH', 'PLAY_STATION', 'XBOX']),
            "anyo"=>$this->faker->year()
        ];
    }
}
