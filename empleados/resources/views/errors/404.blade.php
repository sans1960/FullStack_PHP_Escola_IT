@extends('errors.base')

@section('title', __('Not Found'))
@section('message')
<div class="p-3 mt-5 text-center w-100">
    <div class="mt-5 ">
     <h1> Page Error</h1>
    </div>
    <div class="mt-5 ">
      <h1 class="mt-5">404</h1>
      <p class="mt-5">The URL you requested not fund.</p>
      <a href="{{url('/')}}" class="mt-5 btn btn-primary">Go Home</a>
    </div>
    <div class="mt-3">
      {{ date('l jS \of F Y h:i:s A')}}
    </div>
  </div>
@endsection

@section('image')
<img class="img-fluid" src="{{asset('assets/images/404.png')}}" alt="">

@endsection
