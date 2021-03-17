@extends('layout')
@section('title','catalog-index')
@section('content')
<div class="uk-container"></div>
<div class="uk-card uk-margin-medium-top uk-card-default uk-overflow-auto uk-card-body uk-width-1-1@m">

    <h3 class="uk-card-title">Vista de tots els llibres</h3>
    <a href="{{ url('catalog/create') }}" class="uk-button">Afegir llibre</a>
    <table class="uk-table">
        <caption>Tots els llibres</caption>
        <thead>
            <tr>
                <th>Titol</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Veure</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Table Data</td>
                <td>Table Data</td>
                <td>Table Data</td>
                <td><a href="{{ url('catalog/show/{id}') }}" class="uk-button uk-button-small uk-button-primary">Veure</a></td>
                <td><a href="{{ url('catalog/edit/{id}') }}" class="uk-button uk-button-small uk-button-secondary">Editar</a></td>
                <td><a href="" class="uk-button uk-button-small uk-button-danger">Eliminar</a></td>
            </tr>
            <tr>
                <td>Table Data</td>
                <td>Table Data</td>
                <td>Table Data</td>
                <td><a href="" class="uk-button">Veure</a></td>
                <td><a href="" class="uk-button">Editar</a></td>
                <td><a href="" class="uk-button">Eliminar</a></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endsection
