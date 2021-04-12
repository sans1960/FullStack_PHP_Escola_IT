<?php

namespace App\Http\Controllers;

use App\Models\Partit;
use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Http\Requests\CreatePartidoRequest;
use App\Http\Requests\UpdatePartidoRequest;

class PartitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partits=Partit::all()->sortBy('dia');
        return view('partits.index',compact('partits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos = Equipo::all();
        return view('partits.create',compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePartidoRequest $request)
    {
        // dd($request->all());
        $requested_data = $request->all();
        $new_partit = new Partit();
        $new_partit->dia =$requested_data['dia'];
        $new_partit->hora =$requested_data['hora'];
        $new_partit->campo =$requested_data['campo'];
        $new_partit->resultado =$requested_data['resultado'];
        $new_partit->comentarios = $requested_data['comentarios'];
        $new_partit->save();
        if(isset($requested_data['equipl'])){
            $new_partit->equipo()->attach($requested_data['equipl']);
        }
        if(isset($requested_data['equipv'])){
            $new_partit->equipo()->attach($requested_data['equipv']);
        }
        return redirect()->route('partits.index')->with("success"," Partido Creado" );;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partit  $partit
     * @return \Illuminate\Http\Response
     */
    public function show(Partit $partit)
    {
        return view('partits.show',compact('partit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partit  $partit
     * @return \Illuminate\Http\Response
     */
    public function edit(Partit $partit)
    {
        $equipos = Equipo::all();
        return view('partits.edit',compact('partit','equipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partit  $partit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartidoRequest $request, Partit $partit)
    {
       $partit->update($request->all());
        // if(isset($requested_data['equipl'])){
        //     $new_partit->equipo()->attach($requested_data['equipl']);
        // }
        // if(isset($requested_data['equipv'])){
        //     $new_partit->equipo()->attach($requested_data['equipv']);
        // }
        return redirect()->route('partits.index')->with("success"," Partido Actualizado" );;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partit  $partit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partit $partit)
    {
        $partit->delete();
        return redirect()->route('partits.index')->with("success"," Partido Eliminado" );
    }
}
