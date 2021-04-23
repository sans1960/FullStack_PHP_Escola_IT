@extends('layouts.panel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Crear Cliente</div>

                <div class="card-body">
                    <form action="{{ route('clientes.store')}}" method="POST">
                        @csrf
                        <div class="form-row">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                            @error('nombre')

                            <p class="text-danger">{{$message}}</p>

                             @enderror
                          </div>
                          <div class="col">
                            <input type="text"  class="form-control" placeholder="Poblacion" name="poblacion">
                            @error('poblacion')

                            <p class="text-danger">{{$message}}</p>

                             @enderror
                          </div>
                        </div>
                        <div class="form-row mt-5">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Telefono" name="telefono">
                              @error('telefono')

                              <p class="text-danger">{{$message}}</p>

                               @enderror
                            </div>
                            <div class="col">
                              <input type="email"  class="form-control" placeholder="Email" name="email">
                              @error('email')

                              <p class="text-danger">{{$message}}</p>

                               @enderror
                            </div>
                          </div>
                        <div class="d-flex justify-content-center mt-5">

                          <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
