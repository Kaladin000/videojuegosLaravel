<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReadAllVideojuegosRequest;
use App\Http\Requests\StoreVideojuegoRequest;
use App\Http\Requests\UpdateVideojuegoRequest;
use App\Models\Videojuego;

class VideojuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ReadAllVideojuegosRequest $request)
    {
        return Videojuego::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideojuegoRequest $request)
    {
        $videojuego = new Videojuego();

        $videojuego->titulo = $request->titulo;
        $videojuego->descripcion = $request->descripcion;
        $videojuego->numero = $request->numero;
        $videojuego->genero = $request->genero;
        $videojuego->subgenero = $request->subgenero;
        $videojuego->mes = $request->mes;
        $videojuego->año = $request->año;
        $videojuego->nombre_desarrollador = $request->desarrollador_id;
        $videojuego->editor_id = $request->editor_id;

        $videojuego->save();

        return response([
            "error" => false,
            "message" => "Videojuego registrado",
            "data" => $videojuego,
            "code" => 201
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Videojuego $videojuego)
    {
        return $videojuego;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videojuego $videojuego)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideojuegoRequest $request, Videojuego $videojuego)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videojuego $videojuego)
    {
        //
    }
}
