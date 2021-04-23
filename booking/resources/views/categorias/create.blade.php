@extends('layouts.panel')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header">Crear Categoria</div>

                <div class="card-body">
                    <form action="{{ route('categorias.store')}}" method="POST">
                        @csrf
                        <div class="form-row">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                            @error('nombre')

                            <p class="text-danger">{{$message}}</p>

                             @enderror
                          </div>
                          <div class="col">
                            <input type="number" min="0" step="0.10" class="form-control" placeholder="Precio" name="precio">
                            @error('precio')

                            <p class="text-danger">{{$message}}</p>

                             @enderror
                          </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="caracteristicas">Caracteristicas</label>
                            <textarea class="form-control" id="caracteristicas" name="caracteristicas" rows="3"></textarea>
                            @error('caracteristicas')

                            <p class="text-danger">{{$message}}</p>

                             @enderror
                        </div>
                        <div class="d-flex justify-content-center">

                          <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
    .create( document.querySelector( '#caracteristicas' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
@endsection
