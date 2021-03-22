@extends('layout')
@section('title','Empleado-Edit')
@section('content')
<div class="row">
    <div class="mx-auto mt-5 col-md-10">
        <div class="card">
            <h5 class="card-header">Editar Empleado</h5>
            <div class="card-body">
             <form action="{{route('empleados.update',$empleado->id)}}" method="post">
                 @csrf
                 @method('PUT')
               <div class="row">
                   <div class="mt-2 col-md-6">
                    <input type="text" class="form-control" name="nombre_completo" value="{{ $empleado->nombre_completo }}" autofocus>
                    @error('nombre_completo')
                    <div class="mt-2 alert alert-danger" role="alert">
                       <p>{{$message}}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror
                    </div>

                   <div class="mt-2 col-md-6">
                    <input type="text" class="form-control" name="departamento" value="{{ $empleado->departamento }}">
                    @error('departamento')
                    <div class="mt-2 alert alert-danger" role="alert">
                       <p>{{$message}}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror
                   </div>
                   <div class="mt-2 col-md-6">
                    <input type="text" class="form-control" name="categoria" value="{{ $empleado->categoria }}">
                    @error('categoria')
                    <div class="mt-2 alert alert-danger" role="alert">
                       <p>{{$message}}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror
                    </div>

                   <div class="mt-2 col-md-6">
                    <input type="email" class="form-control" name="email" value="{{ $empleado->email }}">
                    @error('email')
                    <div class="mt-2 alert alert-danger" role="alert">
                       <p>{{$message}}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror

                   </div>
                   <div class="mt-2 col-md-6">
                    <input type="text" class="form-control" name="telefono" value="{{ $empleado->telefono }}">
                    @error('telefono')
                    <div class="mt-2 alert alert-danger" role="alert">
                       <p>{{$message}}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @enderror
                    </div>

                   <div class="mt-2 col-md-6">
                    <input type="date" class="form-control" name="fecha_alta" value="{{ $empleado->fecha_alta }}">
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
                       <textarea name="observaciones"  id="" cols="90" rows="10" class="form-control">
                           {{$empleado->observaciones}}
                       </textarea>
                       @error('observaciones')
                       <div class="mt-2 alert alert-danger" role="alert">
                          <p>{{$message}}</p>
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         </div>
                       @enderror
                   </div>
                   <div class="mx-auto mt-2 col-md-4">
                   <input type="submit" class="mx-auto form-control btn-info" value="Actualizar">

                </div>
               </div>

             </form>
            </div>
          </div>

    </div>
</div>
@endsection

