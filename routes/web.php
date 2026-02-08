<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    echo 'Proyecto de 2 de DAW de aplicación de videojuegos favoritos';
});
