<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEquipoRequest;
use App\Http\Requests\UpdateEquipoRequest;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos.index',compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEquipoRequest $request)
    {
         $equipo=new Equipo($request->all());
         if ($request->hasFile('escudo')){
             $file           = $request->file("escudo");

            $nombrearchivo  = $file->getClientOriginalName();
            $file->move(public_path("img/escudos/"),$nombrearchivo);
             $equipo->escudo      = $nombrearchivo;
         }
         $equipo->save();


        return redirect()->route('equipos.index')->with("success"," Equipo Creado" );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {

        return view('equipos.show',compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo $equipo)
    {
        return view('equipos.edit',compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEquipoRequest $request, Equipo $equipo)
    {
        // if ($request->hasFile('escudo')){
        //     $file           = $request->file("escudo");

        //     $nombrearchivo  = $file->getClientOriginalName();
        //     $file->move(public_path("img/escudos/"),$nombrearchivo);
        //     $equipo->escudo      = $nombrearchivo;
        // }
        $equipo->update($request->all());
        return redirect()->route('equipos.index')->with("success"," Equipo Actualizado" );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        $equipo->delete();
        return redirect()->route('equipos.index')->with("success"," Equipo Eliminado" );
    }
}
