<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BOOKING</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}"></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="{{asset('panel/images/hotel.png')}}" width="120"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                @if (Route::has('login'))

                @auth

                <li class="nav-item">
                    <a href="{{ url('/home') }}" class="nav-link">Home</a>
                 </li>
                @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Log in</a>
                  </li>

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                      </li>

                    @endif
                @endauth

        @endif


            </ul>




            </div>
          </nav>
<div class="container mt-3">
    <div class="row mt-3">
        @foreach ($categorias as $categoria)
        <div class="col-md-3">
        <div class="card">
            <img src="{{$categoria->galeria->url}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">{{$categoria->nombre}}</p>
            </div>
          </div>
        </div>
        @endforeach

    </div>
</div>
    </body>
</html>
