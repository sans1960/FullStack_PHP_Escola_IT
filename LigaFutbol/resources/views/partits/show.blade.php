<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end mt-5 ">
                    <a href="{{route('partits.index')}}" class="inline-flex mr-3 items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Back</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200 mt-5">
                    <section class="text-gray-400 bg-gray-900 body-font">
                        <div class="container px-5 py-24 mx-auto">

                          <div class="flex flex-wrap -m-4">
                            <div class="lg:w-1/4 md:w-1/2 p-2 w-full flex flex-col justify-center items-center">

                                <img width="100" alt="ecommerce" class="object-content object-center  block" src="{{ asset('img/escudos/'.$partit->equipo->first()->escudo)}}">

                              <div class="mt-4">
                                <h3 class="text-white text-xs tracking-widest title-font mb-1">EQUIPO LOCAL</h3>
                                <h2 class="text-white title-font text-lg font-medium">{{$partit->equipo->first()->nombre}}</h2>

                              </div>
                            </div>
                            <div class="lg:w-1/2 md:w-1/2 p-2 w-full text-center">
                             <p>{{$partit->dia}}</p>
                             <p>{{$partit->hora}}</p>
                             <p>{{$partit->campo}}</p>
                             <p>{{$partit->resultado}}</p>

                            </div>

                            <div class="lg:w-1/4 md:w-1/2 p-2 w-full flex flex-col justify-center items-center">
                                <img alt="ecommerce" class="object-content object-center  block" width="100" src="{{ asset('img/escudos/'.$partit->equipo->last()->escudo)}}">

                              <div class="mt-4">
                                <h3 class="text-white text-xs tracking-widest title-font mb-1">EQUIPO VISITANTE</h3>
                                <h2 class="text-white title-font text-lg font-medium">{{$partit->equipo->last()->nombre}}</h2>
                              </div>
                            </div>

                          </div>
                        </div>
                      </section>
                    <div class="mt-5 p-6">
                        {{$partit->comentarios}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
