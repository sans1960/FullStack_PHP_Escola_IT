<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Categoria;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\CreateReservaRequest;
use App\Http\Requests\UpdateReservaRequest;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::all();
        return view('reservas.index',compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $clientes = Cliente::all();
        return view('reservas.create',compact('categorias','clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateReservaRequest $request)
    {
        // dd($request->all());
        Reserva::create($request->all());
        return redirect()->route('reservas.index')->with('success','Reserva creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        return view('reservas.show',compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        $categorias = Categoria::all();
        $clientes = Cliente::all();
        return view('reservas.edit',compact('reserva','categorias','clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReservaRequest $request, Reserva $reserva)
    {
        $reserva->update($request->all());
        return redirect()->route('reservas.index')
        ->with('success','Reserva actualizada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
        return redirect()->route('reservas.index')->with('success','Reserva eliminada satistactoriamente');
    }
}
