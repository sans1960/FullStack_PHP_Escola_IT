@extends('layouts.panel')
@section('content')
<div class="container">
    <div class="row mt-2">
        <div class="col-md-12">
                <div class="card">
                <div class="card-header">{{ __('Reservas') }}</div>


                <div class="card-body">
                    <div class="d-flex justify-content-end mt-2">
                        <a href="{{ route('reservas.create')}}" class="btn btn-success mr-2">Crear Reserva</a>
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
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header text-center">
                    Reservas
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Fecha Llegada</th>
                                <th>Fecha Salida</th>
                                <th>Categoria</th>
                                <th>Cliente</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservas as $reserva)
                            <tr>
                                <td>{{$reserva->fecha_llegada}}</td>
                                <td>{{$reserva->fecha_salida}} </td>
                                <td>{{$reserva->categoria->nombre}}</td>
                                <td>{{$reserva->cliente->nombre}} </td>
                                <td>
                                    <div class="d-flex justify-content-around">
                                        <a href="{{route('reservas.show',$reserva->id)}}" class="text-success"><i class="zmdi zmdi-eye zmdi-hc-2x "></i></a>
                                        <a href="{{route('reservas.edit',$reserva->id)}}" class="text-warning"><i class="zmdi zmdi-edit zmdi-hc-2x"></i></a>
                                        <form action="{{route('reservas.destroy', $reserva->id)}}" method="post">
                                             @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm"  type="submit"><i class="zmdi zmdi-delete zmdi-hc-2x"></i></button>
                                        </form>
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
