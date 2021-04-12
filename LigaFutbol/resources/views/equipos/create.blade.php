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
                    <form action="{{ route('equipos.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="mt-4">
                            <x-label for="name" :value="__('Nombre')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="nombre"  />
                            @error('nombre')

                            <p class="text-red-900">{{$message}}</p>

                             @enderror
                        </div>


                        <div class="mt-4">
                            <x-label for="poblacion" :value="__('Poblacion')" />

                            <x-input id="poblacion" class="block mt-1 w-full" type="text" name="poblacion"  />
                            @error('poblacion')

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


                        <div class="mt-4">
                            <x-label for="social" :value="__('Social')" />

                            <x-input id="social" class="block mt-1 w-full"
                                            type="text"
                                            name="social" />
                            @error('social')

                            <p class="text-red-900">{{$message}}</p>

                             @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" />
                            @error('email')

                            <p class="text-red-900 >{{$message}}</p>

                             @enderror
                        </div>
                        <div class="mt-4">
                            <x-label for="escudo" :value="__('Escudo')" />

                            <x-input id="escudo" class="block mt-1 w-full" type="file" name="escudo" />
                        </div>
                    </div>
                    <x-button class="ml-4 mt-5">
                        {{ __('Register') }}
                    </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
