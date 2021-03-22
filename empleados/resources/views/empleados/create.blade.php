@extends('layout')
@section('title','Empleados-Crear')

@section('content')
<div class="row">
    <div class="mx-auto mt-5 col-md-10">
        <div class="card">
            <h5 class="card-header">Añadir Empleado</h5>
            <div class="card-body">
             <form action="{{route('empleados.store')}}" method="post">
                 @csrf
               <div class="row">
                   <div class="mt-2 col-md-6">
                    <input type="text" class="form-control" name="nombre_completo" placeholder="Nombre Completo" autofocus>
                    @error('nombre_completo')
                    <div class="mt-2 alert alert-danger" role="alert">
                       <p>{{$message}}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror
                    </div>

                   <div class="mt-2 col-md-6">
                    <input type="text" class="form-control" name="departamento" placeholder="Departamento">
                    @error('departamento')
                    <div class="mt-2 alert alert-danger" role="alert">
                       <p>{{$message}}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror
                   </div>
                   <div class="mt-2 col-md-6">
                    <input type="text" class="form-control" name="categoria" placeholder="Categoria">
                    @error('categoria')
                    <div class="mt-2 alert alert-danger" role="alert">
                       <p>{{$message}}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror
                    </div>

                   <div class="mt-2 col-md-6">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    @error('email')
                    <div class="mt-2 alert alert-danger" role="alert">
                       <p>{{$message}}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror

                   </div>
                   <div class="mt-2 col-md-6">
                    <input type="text" class="form-control" name="telefono" placeholder="Teléfono">
                    @error('telefono')
                    <div class="mt-2 alert alert-danger" role="alert">
                       <p>{{$message}}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror
                    </div>

                   <div class="mt-2 col-md-6">
                    <input type="date" class="form-control" name="fecha_alta">
                    @error('fecha_alta')
                    <div class="mt-2 alert alert-danger" role="alert">
                       <p>{{$message}}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror
                   </div>
                </div>
                   <div class="row">
                   <div class="mt-2 col-lg-12">
                       <textarea name="observaciones" placeholder="Observaciones" id="" cols="90" rows="10" class="form-control"></textarea>
                       @error('observaciones')
                       <div class="mt-2 alert alert-danger" role="alert">
                          <p>{{$message}}</p>
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         </div>
                       @enderror
                   </div>
                   <div class="mx-auto mt-2 col-md-4">
                   <input type="submit" class="mx-auto form-control btn-info" value="Crear">

                </div>
               </div>

             </form>
            </div>
          </div>

    </div>
</div>

@endsection
