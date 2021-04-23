@extends('layouts.panel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Crear Reserva</div>

                <div class="card-body">
                    <form action="{{ route('reservas.store')}}" method="POST">
                        @csrf
                        <div class="form-row">
                          <div class="col">
                              <label for="">Fecha Llegada</label>
                            <input type="date" class="form-control" name="fecha_llegada">
                            @error('fecha_llegada')

                            <p class="text-danger">{{$message}}</p>

                             @enderror
                          </div>
                          <div class="col">
                            <label for="">Fecha Salida</label>
                            <input type="date"  class="form-control"  name="fecha_salida">
                            @error('fecha_salida')

                            <p class="text-danger">{{$message}}</p>

                             @enderror
                          </div>
                        </div>
                        <div class="form-row mt-5">
                            <div class="col">
                              <select name="categoria_id" id="" class="form-control">
                                  <option value="">Escoje Categoria</option>
                                  @foreach ($categorias as $categoria)
                                      <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                  @endforeach
                              </select>
                              @error('categoria_id')

                              <p class="text-danger">{{$message}}</p>

                               @enderror
                            </div>
                            <div class="col">
                                <select name="cliente_id" id="" class="form-control">
                                    <option value="">Escoje Cliente</option>
                                    @foreach ($clientes as $cliente)
                                        <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                                    @endforeach
                                </select>
                              @error('cliente_id')

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
