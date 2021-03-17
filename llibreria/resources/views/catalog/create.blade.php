@extends('layout')
@section('title','create')
@section('content')
<div class="uk-container"></div>
<div class="uk-card uk-margin-small-top uk-card-default uk-card-body uk-width-1-1@m">
    <h3 class="uk-card-title">Afegir Llibre</h3>
    <form class="uk-grid-small" uk-grid enctype="multipart/form-data" method="POST" action="{{ route('catalog.store')}}">
        @csrf


        <div class="uk-width-1-2@s">
            <input class="uk-input" type="text" name="titulo" placeholder="Titulo">
            <span class="uk-text-danger">@error('titulo')
                {{ $message }}
            @enderror</span>
        </div>
        <div class="uk-width-1-2@s">
            <input class="uk-input" type="text" name="autor" placeholder="Autor">
            <span class="uk-text-danger">@error('autor')
                {{ $message }}
            @enderror</span>
        </div>
        <div class="uk-width-1-2@s">
            <input class="uk-input" type="text" name="editorial" placeholder="Editorial">
            <span class="uk-text-danger">@error('editorial')
                {{ $message }}
            @enderror</span>
        </div>
        <div class="uk-width-1-2@s">
            <input class="uk-input" type="text" name="isbn" placeholder="ISBN">
            <span class="uk-text-danger">@error('isbn')
                {{ $message }}
            @enderror</span>
        </div>

        <div class="uk-width-1-1">
            <textarea class="uk-textarea" rows="5" name="descripcion" placeholder="Descripcion"></textarea>
            <span class="uk-text-danger">@error('descripcion')
                {{ $message }}
            @enderror</span>
        </div>
        <div class="uk-margin" uk-margin>
            <input type="submit" class="uk-button uk-button-default" value="Afegir">
        </div>
    </form>
</div>
</div>
@endsection
