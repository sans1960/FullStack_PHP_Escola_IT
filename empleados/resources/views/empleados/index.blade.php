@extends('layout')
@section('title','Empleados-index')
@section('content')
<div class=" row">
    <div class="mx-auto mt-5 col-md-10">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert"">
            <p>{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="card">
            <h5 class="card-header">Gestión de Empleados</h5>
            <div class="card-body">
              <h5 class="card-title">Lista de Empleados</h5>
              <a href="{{ route('empleados.create')}}" class="mt-2 btn btn-light"  data-bs-toggle="tooltip" title="Añadir Empleado"><i class="fas fa-plus fa-2x"></i></a>
              <div class="mt-2 table-responsive">
                <table class="table">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Departamento</th>
                          <th>Teléfono</th>
                          <th colspan="2" class="text-center">Acciones</th>

                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($empleados as $empleado)
                          <tr>
                              <td>{{$empleado->id}}</td>
                              <td>{{$empleado->nombre_completo}}</td>
                              <td>{{$empleado->departamento}}</td>
                              <td>{{$empleado->telefono}}</td>
                              <td colspan="2">
                                  <div class="flex-row d-flex justify-content-between align-items-center">
                                      <div>
                                  <a href="{{ route('empleados.show',$empleado->id )}}" data-bs-toggle="tooltip" title="Ver Empleado" ><span style="color:green"><i class="fas fa-eye fa-lg"></i></span></a>
                                </div>
                                <div>
                              <a href="{{ route('empleados.edit',$empleado->id )}}" data-bs-toggle="tooltip" title="Editar Empleado"><span style="color:brown"><i class=" far fa-edit fa-lg"></i></span></a>
                            </div>
                             <div>

                                  <form action="{{ route('empleados.destroy',$empleado->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                  <button class="btn" type="submit" data-bs-toggle="tooltip" title="Eliminar Empleado" ><span style="color:red"><i class="far fa-trash-alt fa-lg"></i></span></button>
                                </form>
                            </div>
                                </div>
                                </td>
                          </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>

            </div>
          </div>
    </div>
</div>

@endsection

