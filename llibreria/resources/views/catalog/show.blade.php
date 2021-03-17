@extends('layout')
@section('title','show')
@section('content')
<div class="uk-container"></div>
<div class="uk-card uk-margin-small-top uk-card-default uk-card-body uk-width-1-1@m">
    <h3 class="uk-card-title">Mostra Llibre</h3>
    <form class="uk-grid-small" uk-grid enctype="multipart/form-data" method="POST" action="{{ route('catalog.edit{id}')}}">
        @csrf


        <div class="uk-width-1-2@s">
            <input class="uk-input" type="text" name="titulo" placeholder="Titulo">
        </div>
        <div class="uk-width-1-2@s">
            <input class="uk-input" type="text" name="autor" placeholder="Autor">
        </div>
        <div class="uk-width-1-2@s">
            <input class="uk-input" type="text" name="editorial" placeholder="Editorial">
        </div>
        <div class="uk-width-1-2@s">
            <input class="uk-input" type="text" name="isbn" placeholder="ISBN">
        </div>

        <div class="uk-width-1-1">
            <textarea class="uk-textarea" rows="5" name="descripcion" placeholder="Descripcion"></textarea>
        </div>
        <div class="uk-margin" uk-margin>
            <input type="submit" class="uk-button uk-button-default" value="Afegir">
        </div>
    </form>
</div>
</div>
@endsection
