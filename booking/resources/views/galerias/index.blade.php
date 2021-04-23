@extends('layouts.panel')
@section('content')
<div class="container">
    <div class="row mt-2">
        <div class="col-md-12">
                <div class="card">
                <div class="card-header">{{ __('Galerias') }}</div>


                <div class="card-body">
                    <div class="d-flex justify-content-end mt-2">
                        <a href="{{ route('galerias.create')}}" class="btn btn-success mr-2">Crear Galeria</a>
                    </div>
                    <div class="mt-5">
                        @if ($message = Session::get('success'))

                        <div class="alert alert-success alert-block">

                            <button type="button" class="close" data-dismiss="alert">×</button>

                                {{ $message }}

                        </div>

                        @endif

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
