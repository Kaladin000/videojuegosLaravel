<?php

namespace App\Faker;

use Faker\Provider\Base;

class VideojuegoFakerProvider extends Base
{
    public function tituloJuego(): string {
        return $this->generator->sentence(2);
    }

}
