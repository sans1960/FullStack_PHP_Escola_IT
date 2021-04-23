@extends('layouts.panel')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-8 mx-auto">
            <div class="card text-center">
                <div class="card-header">
                 <h3> {{$cliente->nombre}}</h3>
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{$cliente->poblacion}}</h5>
                  <h5 class="card-title">{{$cliente->telefono}}</h5>
                  <h5 class="card-title">{{$cliente->email}}</h5>

                </div>
              </div>
        </div>
    </div>
</div>

@endsection
