@extends('layouts.panel')
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-4 mx-auto">
            <div class="card mt-2">
                <div class="card-body">
                  <h5 class="card-title">{{$reserva->cliente->nombre}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$reserva->cliente->poblacion}}</h6>
                  <p class="card-text">{{$reserva->cliente->telefono}}.</p>
                  <p class="card-text">{{$reserva->cliente->email}}.</p>

                </div>
              </div>
        </div>
        <div class="col-md-4 mx-auto">
            <div class="card mt-2">
                <div class="card-body">
                <h5 class="card-title">{{$reserva->categoria->nombre}}</h5>
                <img src="{{$reserva->categoria->galeria->url}}" class="card-img-top" alt="...">



                  <p class="card-text">Fecha llegada : {{$reserva->fecha_llegada}}.</p>
                  <p class="card-text">Fecha salida : {{$reserva->fecha_salida}}.</p>

                </div>
              </div>
        </div>


    </div>
</div>

@endsection
