@extends('layout')
@section('title','Resultados')
@section('content')
<div class="mt-5 row">
    <div class="col-lg-12">


              <div class="mt-2 table-responsive">
                  <h4>Resultados por : {{$busqueda}}</h4>
                <table class="table">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Departamento</th>
                          <th>Teléfono</th>
                          <th>Email</th>
                          <th>Categoria</th>
                          <th>Fecha Alta</th>
                          <th>Observaciones</th>



                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($resultados as $item)
                     <tr>
                         <td>{{$item->id}}</td>
                         <td>{{$item->nombre_completo}}</td>
                         <td>{{$item->departamento}}</td>
                         <td>{{$item->telefono}}</td>
                         <td>{{$item->email}}</td>
                         <td>{{$item->categoria}}</td>
                         <td>{{$item->fecha_alta}}</td>
                         <td>{{$item->observaciones}}</td>
                     </tr>

                    @endforeach
                  </tbody>
                </table>

    </div>

</div>
</div>

@endsection
