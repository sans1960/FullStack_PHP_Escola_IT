@extends('layout')
@section('title','recuperar')
@section('content')
<div class="uk-container">
    <div class="uk-flex uk-margin uk-text-center">
        <div class="uk-margin-auto uk-margin-auto-vertical uk-width-1-2@s uk-card uk-card-default uk-card-body">
            <form action="{{ url('/recuperar')}}" method="POST">
                @csrf

                <fieldset class="uk-fieldset">

                    <legend class="uk-legend">Recuperar password</legend>

                    <div class="uk-margin">
                        <input class="uk-input" name="email" type="email" placeholder="Email">
                        <span class="uk-text-danger">@error('email')
                            {{ $message }}
                        @enderror</span>
                    </div>


                    <div class="uk-margin">
                        <input class="uk-button "  type="submit" value="Login">
                    </div>



                </fieldset>
            </form>

        </div>
    </div>
</div>
@endsection
