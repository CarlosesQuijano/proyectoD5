<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between align-center">
            <h2 class="font-semibold text-xl text-white leading-tight">
                Maestros
            </h2>
            <a href="{{ route('maestro.create') }}" class="p-2 bg-sky-800 rounded-sm text-white">Agregar maestro</a>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        @if (session('status'))
                            <span class="bg-green-500 p-1">{{ session('status') }}</span>
                        @endif
                        <div>
                            <input wire:model="search" type="text" placeholder="Search...." class="w-full my-3 text-black"/>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-900">
                                <thead class="text-xs text-gray-900 uppercase bg-gray-50 dark:bg-gray-900 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            ID
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Email
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Direccion
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Fecha_nacimiento
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Clase asignada
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                      @foreach ($maestros as $maestro)
                                        <tr class="bg-white border-b dark:bg-white dark:border">
                                            <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                                            {{$maestro->id}}
                                            </th>
                                            <td class="px-6 py-4">
                                            {{$maestro->nombre}}
                                            </td>
                                            <td class="px-6 py-4">
                                            {{$maestro->email}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$maestro->direccion}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$maestro->fecha_naciminiento }}
                                               </td>
                                            <td class="px-6 py-4">
                                                 {{$maestro->clase_asignada}}
                                                </td>

                                        
                                            <td class="px-6 py-4 flex gap-2 align-center">

                                                <a href="{{route("maestro.edit", $maestro->id)}}" class="font-medium p-1 bg-sky-500 text-white rounded-sm">Edit</a>
                                                <form action="{{ route('maestro.destroy', $maestro->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="font-medium p-1 bg-red-500 text-white rounded-sm">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
