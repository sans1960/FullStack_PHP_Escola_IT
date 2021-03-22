@extends('layout')
@section('title','Registrar')
@section('content')
<div class="mt-3 row">
    <div class="mx-auto col-lg-8">
        <div class="card">
            <h5 class="card-header">Registro Usuarios</h5>
            <div class="card-body">
                <form action="{{ url('auth/create')}}" method="post">
                    @csrf
                <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" name="name" class="form-control" id="name" required >
                    </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required >
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                  </div>
                  <div class="mb-3 d-flex justify-content-center">
                      <button class="mx-auto btn" data-bs-toggle="tooltip" title="Registrar" type="submit"><i class="fas fa-user-circle fa-2x "></i></button>

                  </div>

                </form>
          </div>
    </div>
</div>

@endsection
