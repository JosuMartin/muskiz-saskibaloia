@extends('layouts.app')

@section('title', 'Muskiz Saskibaloia')

@section('content')
<main class="min-h-[70vh] p-10 max-w-[1200px] mx-auto">
    <h1 class="text-3xl font-bold mb-6 text-center">Contacto</h1>
    
    <div class="flex flex-col md:flex-row gap-6 h-full">
        
        <div class="flex-1 bg-green-400 p-8 rounded-3xl shadow-lg min-h-[500px]">
            <h2 class="text-xl font-bold">Información</h2>
            <p>Aquí puedes poner la dirección o redes sociales.</p>
        </div>

        <div class="flex-1 bg-orange-400 p-8 rounded-3xl shadow-lg min-h-[300px]">
            <h2 class="text-xl font-bold">Formulario</h2>
            <p>Aquí iría tu formulario de contacto.</p>
        </div>

    </div>

    <p class="mt-6 text-center italic text-gray-600">Contenido adicional de tu página...</p>
</main>
@endsection
