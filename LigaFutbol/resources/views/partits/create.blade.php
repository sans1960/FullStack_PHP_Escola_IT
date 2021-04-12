<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
       <form action="{{ route('partits.store')}}" method="post" >
                        @csrf
             <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="mt-4">
                            <x-label for="dia" :value="__('Dia')" />

                            <x-input id="dia" class="block mt-1 w-full" type="date" name="dia"  />
                            @error('dia')

                            <p class="text-red-900">{{$message}}</p>

                             @enderror
                        </div>


                        <div class="mt-4">
                            <x-label for="hora" :value="__('Hora')" />

                            <x-input id="hora" class="block mt-1 w-full" type="text" name="hora"  />
                            @error('hora')

                            <p class="text-red-900">{{$message}}</p>

                             @enderror
                        </div>


                        <div class="mt-4">
                            <x-label for="campo" :value="__('Campo')" />

                            <x-input id="campo" class="block mt-1 w-full"
                                            type="text"
                                            name="campo"
                                             />
                               @error('campo')

                               <p class="text-red-900">{{$message}}</p>

                                @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="resultado" :value="__('Resultado')" />

                            <x-input id="resultado" class="block mt-1 w-full"
                                            type="text"
                                            name="resultado" />
                            @error('resultado')

                            <p class="text-red-900">{{$message}}</p>

                             @enderror
                        </div>
             </div>
             <div class="flex justify-center">


                        <div class="mt-2">
                            <p>Equipo local</p>
                            @foreach ($equipos as $equipo)

                                <label class="">
                                    <input type="radio" name="equipl[]" class="form-radio" value="{{$equipo->id}}">
                                  <span class="ml-2">{{$equipo->nombre}}</span>
                                </label>

                            @endforeach


                        </div>
                        <div class="mt-2">
                            <p>Equipo visitante</p>
                            @foreach ($equipos as $equipo)

                                <label class="">
                                    <input type="radio" name="equipv[]" class="form-radio" value="{{$equipo->id}}">
                                  <span class="ml-2">{{$equipo->nombre}}</span>
                                </label>

                            @endforeach


                        </div>
                    </div>

            <div>
                <label class="block">
                    <span class="text-gray-700">Textarea</span>
                    <textarea id="comentarios" class="form-textarea mt-1 block w-full" name="comentarios" rows="3" placeholder="Enter some long form content."></textarea>
                  </label>
            </div>
         <div>
            <x-button class="ml-4 mt-5">
                {{ __('Register') }}
            </x-button>
         </div>


         <form>
                </div>
            </div>
        </div>
    </div>
    <script>
         ClassicEditor
            .create( document.querySelector( '#comentarios' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</x-app-layout>
