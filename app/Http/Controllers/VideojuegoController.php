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
        $videojuego->desarrollador_id = $request->desarrollador_id;
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
    $videojuego->titulo = $request->titulo ?? $videojuego->titulo;

    $videojuego->descripcion = $request->descripcion ?? $videojuego->descripcion;

    $videojuego->numero = $request->numero ?? $videojuego->numero;

    $videojuego->genero = $request->genero ?? $videojuego->genero;

    $videojuego->subgenero = $request->subgenero ?? $videojuego->subgenero;

    $videojuego->mes = $request->mes ?? $videojuego->mes;

    $videojuego->año = $request->año ?? $videojuego->año;

    $videojuego->desarrollador_id = $request->desarrollador_id ?? $videojuego->desarrollador_id;

    $videojuego->editor_id = $request->editor_id ?? $videojuego->editor_id;

    $videojuego->save();

    return response([
        "error" => false,
        "message" => "Videojuego modificado",
        "data" => $videojuego,
        "code" => 200
    ], 200);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videojuego $videojuego)
    {
        if (!$videojuego->delete()) {
            return response([
                "error"=>true,
                "message"=>"El videojuego no se pudo eliminar.",
                "code"=>500
            ], 500);
        } else {
            return response([
                "error"=>false,
                "message"=>"El videojuego se ha eliminado correctamente.",
                "code"=>200
            ], 200);
        }
    }
}
