<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}"></script>


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
<body class="antialiased">
        <nav class="flex  flex-col  justify-around items-center md:flex-row p-5 bg-gray-700 text-xl text-white">
            <div>
                <img src="{{ asset('img/fcf.png')}}" width="60" class="rounded-lg" alt="">
            </div>
            <div class="mt-5 md:mt-0">
               <h3>Tercera Catalana grup 5</h3>
            </div>
            <div class="mt-5 md:mt-0">
                @if (Route::has('login'))
                <div class="text-sm">
                    @auth
                        <a href="{{ url('/dashboard') }}" class=" uppercase ">Dashboard</a>
                    @else
                        <p>Hello ! Guest</p>
                        <a href="{{ route('login') }}" class=" uppercase">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 uppercase ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>

        </nav>
        <div class="container mx-auto">
            <section class=" body-font mt-5 overflow-x-auto">
                <h3 class=" text-center text-2xl p-5">Partidos</h3>

                <table class="min-w-max w-full table-auto mt-5">
                    <thead>
                        <tr class="bg-gray-900 text-white uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-center">Dia</th>
                            <th class="py-3 px-6 text-center">Hora</th>
                            <th class="py-3 px-6 text-center">Equipo Local</th>
                            <th class="py-3 px-6 text-center">Equipo Visitante</th>
                            <th class="py-3 px-6 text-center">Resultado</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partits as $partit)
                          <tr>
                            <td class="text-center">{{$partit->dia}}</td>
                            <td class="text-center" >{{$partit->hora}}</td>
                            <td class="text-center">{{$partit->equipo->first()->nombre}}</td>
                            <td class="text-center">{{$partit->equipo->last()->nombre}}</td>
                            <td class="text-center">{{$partit->resultado}}</td>
                          </tr>

                        @endforeach
                    </tbody>
                </table>

            </section>
        <section class=" body-font ">
            <h3 class=" text-center text-2xl p-5">Equipos</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-3 mt-5">
                @foreach ($equipos as $equipo)
                    <div class="flex flex-col bg-gray-900 rounded-sm p-4">
                       <img src="{{ asset('img/escudos/'.$equipo->escudo)}}" alt="" width="50">
                       <h2 class="mt-4 text-sm text-white ">{{$equipo->nombre}}</h2>
                       <h3 class="text-white">{{$equipo->poblacion}}</h3>
                       <a href="https://twitter.com/{{$equipo->social}}" class="text-white" target="_blank"><i class="fab fa-twitter "></i> {{$equipo->social}}</a>
                    </div>
                @endforeach

            </div>
        </section>

      </div>







<div class="flex flex-row justify-around items-center mt-5 bg-gray-900 text-white p-5">
    <div>
        <p><i class="far fa-copyright"></i> Albert Sans-2021</p>
    </div>
    <div>
        <p>Powered by <i class="fab fa-laravel"></i></p>
    </div>
    <div>
        <img src="{{asset('img/tailwind.jpg')}}" width="100" alt="">
    </div>
</div>

</body>
</html>
