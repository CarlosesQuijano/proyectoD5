<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<x-app-layout>
   <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Crear Maestros
       </h2>
   </x-slot>

   <div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 text-gray-900">
                   <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                     <p class="flex justify-center align-center">Ingresa los datos del maestro<p>
                        @if (session('errorValidator'))
                    <span class="bg-red-500 p-1">{{session('errorValidator')}}</span>
                    @endif
                   <form class="p-5" action="{{route("maestro.store")}}" method="POST">
                       @csrf
                       {{-- <div class="mb-3 visually-hidden-focusable">
                           <label for="exampleInputEmail1" class="form-label visually-hidden">id</label>
                           <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="id">
                       </div> --}}
                       <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Nombre</label>
                           <input type="text" class="form-control" id="name" aria-describedby="emailHelp" required  name="nombre">
                       </div>
                       <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">Correo</label>
                           <input type="email" class="form-control" id="email" required  name="email">
                       </div>
                       <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="password" required  name="direccion">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Fecha_nacimiento</label>
                        <input type="date" class="form-control" id="password" required  name="fecha">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Clase_asignada</label>
                        <input type="text" class="form-control" id="password" required  name="clase">
                    </div>



                       <button type="submit" class="btn" style="background-color: #562a80; color:white;">Crear Maestros</button>
                   </form>

                   </div>
               </div>
           </div>
       </div>
   </div>
</x-app-layout>
