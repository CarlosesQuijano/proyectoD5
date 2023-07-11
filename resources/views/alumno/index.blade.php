<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between align-center">
            <h2 class="font-semibold text-xl text-white leading-tight">
                Alumnos
            </h2>
            <a href="{{ route('alumno.create') }}" class="p-2 bg-sky-800 rounded-sm text-white">Agregar alumno</a>
        </div>

    </x-slot>

    <div class="py-8 justify-end">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-20">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        @if (session('status'))
                            <span class="bg-green-500 p-1">{{ session('status') }}</span>
                        @endif
                        <div>
                            <input wire:model="search" type="text" placeholder="Search...." class="w-full my-3 text-black"/>
                            <table class="w-full text-sm text-left text-black dark:text-gray-900">
                                <thead class="text-xs text-gray-900 uppercase bg-gray-500 dark:bg-gray-900 dark:text-white">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            ID
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            DNI
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nombre
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Correo
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Direccion
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Fecha_nacimiento
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                      @foreach ($alumnos as $alumno)
                                        <tr class="bg-white border-b dark:bg-white dark:border">
                                            <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-black">
                                            {{$alumno->id}}
                                            </th>
                                            <td class="px-6 py-4">
                                            {{$alumno->DNI}}
                                            </td>
                                            <td class="px-6 py-4">
                                            {{$alumno->nombre}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$alumno->correo}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$alumno->direccion}}
                                               </td>
                                            <td class="px-6 py-4">
                                                 {{$alumno->fecha_nacimiento}}
                                                </td>


                                            <td class="px-6 py-4 flex gap-2 align-center">

                                                <a href="{{route("alumno.edit", $alumno->id)}}" class="font-medium p-1 bg-sky-500 text-white rounded-sm">Edit</a>
                                                <form action="{{ route('alumno.destroy', $alumno->id) }}" method="POST">
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
