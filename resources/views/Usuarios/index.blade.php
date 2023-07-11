<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between align-center">
            <h2 class="font-semibold text-xl text-white leading-tight">
                Users
            </h2>
            <a href="{{ route('Usuarios.create') }}" class="p-2 bg-sky-800 rounded-sm text-white">Agregar usuario</a>
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
                        @livewire('show-users')

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
