<?php

use App\Http\Controllers\DesarrolladorController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideojuegoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/desarrollador', [DesarrolladorController::class, 'index']);
Route::get('desarrollador/{desarrollador}', [DesarrolladorController::class, 'show']);

Route::post('desarrollador', [DesarrolladorController::class, 'store']);

Route::put('desarrollador/{desarrollador}', [DesarrolladorController::class, 'update']);

Route::delete('desarrollador/{desarrollador}', [DesarrolladorController::class, 'destroy']);

Route::apiResource('perfil', PerfilController::class);


Route::post('/user', [UserController::class, 'store']);
Route::post('/user/login', [UserController::class, 'verify']);

Route::middleware('auth:sanctum')->group(function () {
    //Rutas usuario
    Route::get('/user/logout', [UserController::class, 'logout']);
    Route::get('/user/{user}', [UserController::class, 'show']);

    //Rutas videojuego
    Route::get('/videojuego', [VideojuegoController::class, 'index']);
    Route::post('videojuego', [VideojuegoController::class, 'store']);
    Route::get('/videojuego/{videojuego}', [VideojuegoController::class, 'show']);
    Route::put('videojuego/{videojuego}', [VideojuegoController::class, 'update']);
    Route::delete('videojuego/{videojuego}', [VideojuegoController::class, 'destroy']);
});

