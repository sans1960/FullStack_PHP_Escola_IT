@extends('layout')
@section('title','Busqueda')
@section('content')
<div class="mt-5 row">
    <div class="mx-auto mt-5 col-md-10">
        <div class="card">
            <div class="card-header">
              Busqueda de Empleados
            </div>
            <div class="card-body">
                <form class="d-flex" action="/busqueda/resultado" method="GET">
                    @csrf

                    <input class="form-control me-2 " type="search" placeholder="Introducir Departamento" aria-label="Search" name="departamento">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
            </div>
          </div>
    </div>
</div>

@endsection
