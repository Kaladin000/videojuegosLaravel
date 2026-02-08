<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDesarrolladorRequest;
use App\Http\Requests\UpdateDesarrolladorRequest;
use App\Models\Desarrollador;
use Illuminate\Http\Request;

class DesarrolladorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Desarrollador::all();
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
    public function store(StoreDesarrolladorRequest $request)
    {
        $desarrollador = new Desarrollador();
        $desarrollador->nombre_desarrollador=$request->nombre_desarrollador;

        $desarrollador->save();

        return response([
            "error"=>false,
            "message"=>"Desarrollador registrado",
            "data"=>$desarrollador,
            "code"=>201
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Desarrollador $desarrollador)
    {
        return $desarrollador;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Desarrollador $desarrollador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDesarrolladorRequest $request, Desarrollador $desarrollador)
    {
        $desarrollador->nombre_desarrollador=$request->nombre_desarrollador??$desarrollador->nombre_desarrollador;

        $desarrollador->save();

        return response([
            "error"=>false,
            "message"=>"Desarrollador modificado",
            "data"=>$desarrollador,
            "code"=>200
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Desarrollador $desarrollador)
    {
        if (!$desarrollador->delete()) {
            return response([
                "error"=>true,
                "message"=>"El desarrollador no se pudo eliminar.",
                "code"=>500
            ], 500);
        } else {
            return response([
                "error"=>false,
                "message"=>"El desarrollador se ha eliminado correctamente.",
                "code"=>200
            ], 200);
        }
    }
}
