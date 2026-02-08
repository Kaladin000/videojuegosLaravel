<?php

namespace App\Providers;

use App\Faker\VideojuegoFakerProvider;
use Faker\Factory;
use Generator;
use Illuminate\Support\ServiceProvider;

class VideojuegoFakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Generator::class, function() {
            $faker = Factory::create(env('APP_FAKER_LOCALE'));
            $faker->addProvider(new VideojuegoFakerProvider($faker)); // Esto no entiendo por qué, pero no funciona
            return $faker;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
