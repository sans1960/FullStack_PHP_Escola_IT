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
                    @if ($message = Session::get('success'))
                    <div class="bg-green-500 text-white p-6">
                       <p> {{$message}}</p>

                    </div>
                    @endif
                    <div class="flex justify-end mt-5 ">
                        <a href="{{route('partits.create')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Añadir Partido</a>
                    </div>

                    <table class="min-w-max w-full table-auto mt-5">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Dia</th>
                                <th class="py-3 px-6 text-left">Hora</th>
                                <th class="py-3 px-6 text-left">Equipo Local</th>
                                <th class="py-3 px-6 text-left">Equipo Visitante</th>
                                <th class="py-3 px-6 text-left">Resultado</th>
                                <th class="py-3 px-6 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($partits as $partit)
                            <tr>
                                <td>{{$partit->dia}}</td>
                                <td>{{$partit->hora}}</td>
                                <td>{{$partit->equipo->first()->nombre}}</td>
                                <td>{{$partit->equipo->last()->nombre}}</td>
                                <td class="text-center">{{$partit->resultado}}</td>
                                <td>
                                    <div class="flex flex-row justify-around items-center">
                                        <a href="{{ route('partits.show',$partit->id)}}">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        <a href="{{ route('partits.edit',$partit->id)}}">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <form action="{{ route('partits.destroy',$partit->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>




                    {{-- @foreach ($partits as $partit)
                        <p>{{$partit->dia}}</p>
                        <p>{{$partit->hora}}</p>
                        <p>{{$partit->campo}}</p>
                        <p>Equip local :{{$partit->equipo->first()->nombre}}</p>
                        <p>Equip visitant :{{$partit->equipo->last()->nombre}}</p>
                        <p>Resultat :{{$partit->resultado}}</p>
                        <p>Comentarios :{{$partit->comentarios}}</p>
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
