@extends('layout')
@section('title','login')
@section('content')
<div class="uk-container">
    <div class="uk-flex uk-margin uk-text-center">
        <div class="uk-margin-auto uk-margin-auto-vertical uk-width-1-2@s uk-card uk-card-default uk-card-body">
            <form action="{{ url('/login')}}" method="POST">
                @csrf

                <fieldset class="uk-fieldset">

                    <legend class="uk-legend">Login</legend>

                    <div class="uk-margin">
                        <input class="uk-input" name="email" type="email" placeholder="Email" value="{{ old('email') }}">
                        <span class="uk-text-danger">@error('email')
                            {{ $message }}
                        @enderror</span>
                    </div>
                    <div class="uk-margin">
                        <input class="uk-input" name="password" type="password" placeholder="Password" >
                        <span class="uk-text-danger">@error('password')
                            {{ $message }}
                        @enderror</span>
                    </div>

                    <div class="uk-margin">
                        <input class="uk-button "  type="submit" value="Login">
                    </div>



                </fieldset>
            </form>

         <p>¿No estás registrado? <a href="{{ url('/register')}}">Registrate</a></p>
         <p>¿Olvidaste tu contraseña? <a href="{{ url('/recuperar')}}">Recuperar</a></p>
        </div>
    </div>
</div>
@endsection
