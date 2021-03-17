@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code')
<h1 class="uk-text-large uk-text-bold uk-text-italic uk-text-danger">ERROR : 404</h1>

@endsection
@section('message')
<div class="uk-text-italic uk-text-danger">
<p>No s'ha pogut trobar la pàgina sol·licitada però pot estar disponible de nou en el futur</p>
<p>No se ha podido encontrar la página solicitada pero puede estar disponible de nuevo en el futuro</p>
<p>S'es pas pogut trobar la pagina sollicitada mas pòt èsser disponibla de nòu en lo futur</p>
<p>No s'ha puesto trobar la pachina solicitada pero puede estar disponible de nuevo en o futuro</p>
</div>
@endsection
@section('image')
<img src="{{ asset('assets/images/error.jpg')}}"  alt="">

@endsection
