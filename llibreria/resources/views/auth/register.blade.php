@extends('layout')
@section('title','register')
@section('content')
<div class="uk-container">
    <div class="uk-flex uk-margin uk-text-center">
    <div class="uk-margin-auto uk-margin-auto-vertical uk-width-1-2@s uk-card uk-card-default uk-card-body">
        <form action="{{ url('/register') }}" method="POST">
            @csrf

            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Register</legend>
                <div class="uk-margin">
                    <input class="uk-input" name="name" type="text" placeholder="Name" value="{{ old('name') }}">
                    <span class="uk-text-danger">@error('name')
                        {{ $message}}
                    @enderror</span>
                </div>

                <div class="uk-margin">
                    <input class="uk-input" name="email" type="email" value="{{ old('email') }}" placeholder="Email">
                    <span class="uk-text-danger">@error('email')
                        {{ $message}}
                    @enderror</span>
                </div>

                <div class="uk-margin">
                    <input class="uk-input" name="password" value="{{ old('password') }}" type="password" placeholder="Password">
                    <span class="uk-text-danger">@error('password')
                        {{ $message}}
                    @enderror</span>
                </div>

                <div class="uk-margin">
                    <input class="uk-button "  type="submit" value="Register">
                </div>



            </fieldset>
        </form>
    </div>
</div>
</div>
@endsection
