@extends('layouts.panel')
@section('content')
<div class="container">
    <div class="row mt-2">
        <div class="col-md-12">
                <div class="card">
                <div class="card-header">{{ __('Crear Galeria') }}</div>


                <div class="card-body">
                    <form action="{{ route('galerias.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder=" Nombre" name="nombre">
                            </div>
                            <div class="col">
                              <select name="categoria_id" class="form-control" id="">
                                  <option value="">Categoria</option>
                                  @foreach ($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>

                                  @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="form-row mt-5">
                            <div class="col">
                                <input type="file" name="url" id="" class="form-control-file" accept="image/*">
                                @error('url')
                                    <small>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col">
                                <input type="submit"  class="btn btn-secondary" value="Subir imagen">
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
