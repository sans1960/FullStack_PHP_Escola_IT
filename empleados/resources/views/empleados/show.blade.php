@extends('layout')
@section('title','Empleado-show')
@section('content')
<div class="mt-5 row">
    <div class="mx-auto mt-5 col-lg-8">
        <div class="card">
            <div class="card-header">
              {{$empleado->nombre_completo}}
            </div>
            <div class="card-body">
             <div class="row">
                 <div class="col-md-6">
                   <p class="fw-bold ">DEPARTAMENTO : <span class="fst-italic fw-normal">{{$empleado->departamento}}</span></p>
                   <p class="fw-bold ">EMAIL : <span class="fst-italic fw-normal">{{$empleado->email}}</span></p>

                 </div>
                <div class="col-md-6">
                    <p class="fw-bold ">CATEGORIA : <span class="fst-italic fw-normal">{{$empleado->categoria}}</span></p>
                    <p class="fw-bold ">TELEFONO : <span class="fst-italic fw-normal">{{$empleado->telefono}}</span></p>

                </div>
            </div>
            <p class="fw-bold ">OBSERVACIONES : <span class="fst-italic fw-normal">{{$empleado->observaciones}}</span></p>

             </div>
              <div class="card-footer">
                <p class="fw-bold ">FECHA ALTA : <span class="fst-italic fw-normal">{{$empleado->fecha_alta}}</span></p>
             </div>
       </div>
    </div>
</div>

@endsection

