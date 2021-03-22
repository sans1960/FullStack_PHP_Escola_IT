<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <title>@yield('title')</title>
  </head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SYSTEMA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="mb-2 navbar-nav me-auto mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('empleados.index') }}">Empleados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('busqueda') }}">Busqueda</a>
              </li>


              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ url('login/login')}}">Login</a></li>
                  <li><a class="dropdown-item" href="{{ url('login/register')}}">Register</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{ url('login/recuperar')}}">Recuperar</a></li>
                </ul>
              </li>


            </ul>
            <p class="navbar-text"> Bienvenido :<span class="text-success fw-bold text-uppercase">{{Cookie::get('status')}} </span></p>



          </div>
        </div>
 </nav>
 <div class="container">
     <div class="row">
         <div class="mt-5 col-lg-12">
             <p class="text-end text-uppercase fw-bold text-success">{{ date('l jS \of F Y h:i:s A')}}</p>
         </div>
     </div>
 </div>
 <div class="container">
    @yield('content')
 </div>

<div class="container mt-5">
    <p class="text-center">Albert Sans-2021</p>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
