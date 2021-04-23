@extends('layouts.panel')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mx-auto">
            <div class="card text-center">
                <div class="card-header">
                  {{$categoria->nombre}}
                </div>
                <img src="{{$categoria->galeria->url}}" class="card-img-top" alt="...">
                <div class="card-body">
                   {!! $categoria->caracteristicas !!}
                </div>
                <div class="card-footer text-muted">
                  {{$categoria->precio}} €
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
