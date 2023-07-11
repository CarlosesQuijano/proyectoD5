
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
                Rol
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
        </tr>
    </thead>
    <tbody>

        @foreach ($usuarios as $usuario)
            <tr class="bg-white border-b dark:bg-white dark:border">
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                {{$usuario->id}}
                </th>
                <td class="px-6 py-4">
                {{$usuario->name}}
                </td>
                <td class="px-6 py-4">
                {{$usuario->email}}
                </td>
                <td class="px-6 py-4">
                   @php

                       $role = $usuario ->getRoleNames();

                   @endphp

                @if ($usuario->hasRole("admin"))
                <span class="bg-yellow-500 text-white rounded-sm p-1">Admin</span>
                @elseif ($usuario->hasRole("maestro"))
                <span class="bg-blue-500 text-white rounded-sm p-1">Maestro</span>

                @elseif ($usuario->hasRole("alumno"))
                <span class="bg-green-500 text-white rounded-sm p-1">Alumno</span>
                @else
                <span class="bg-indigo-500 text-white rounded-sm p-1">Sin asignación</span>
                @endif
                    </td>
                <td class="px-6 py-4 flex gap-2 align-center">

                    <a href="{{route("Usuarios.edit", $usuario->id)}}" class="font-medium p-1 bg-sky-500 text-white rounded-sm">Edit</a>
                    <form action="{{ route('Usuarios.destroy', $usuario->id) }}" method="POST">
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
