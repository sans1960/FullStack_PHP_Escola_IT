<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Equipos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-end mt-5 ">
                        <a href="{{route('equipos.index')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Back</a>
                    </div>
                    <section class="text-gray-400 body-font bg-gray-900 mt-5">
                        <div class="w-full p-4">
                            <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                              {{-- <div class="w-20 h-20 inline-flex items-center justify-center  text-indigo-400 mb-4">
                               <img src="{{ asset('img/escudos/'.$equipo->escudo)}}" width="100" alt="">
                              </div> --}}
                              <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                  <div>
                                    <img src="{{ asset('img/escudos/'.$equipo->escudo)}}" width="120" alt="">
                                  </div>
                                  <div>
                                    <h2 class="text-lg text-white font-medium title-font mb-2">{{ $equipo->nombre}}</h2>
                                    <p class="leading-relaxed text-base">{{$equipo->poblacion}}</p>
                                  </div>
                                  <div class="flex flex-col">
                                    <p class="leading-relaxed text-base">{{$equipo->campo}}</p>
                                    <a href="https://twitter.com/{{$equipo->social}}" target="_blank"><i class="fab fa-twitter"></i> {{$equipo->social}}</a>
                                    <a href="mailto:{{$equipo->email}}" target="_blank"class=""><i class="fas fa-envelope "></i> {{$equipo->email}}</a>
                                  </div>
                              </div>

                            </div>
                          </div>
                    </section>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
