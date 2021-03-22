@extends('layout')
@section('title','Recuperar')
@section('content')
<div class="mt-3 row">
    <div class="mx-auto col-lg-8">
        <div class="card">
            <h5 class="card-header">Recuperar</h5>
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" autofocus>
                  </div>

                  <div class="mb-3 d-flex justify-content-center">
                      <button class="mx-auto btn" data-bs-toggle="tooltip" title="Recuperar" type="submit"><i class="fas fa-user-lock fa-lg"></i></button>

                  </div>

                </form>
          </div>
    </div>
</div>

@endsection
