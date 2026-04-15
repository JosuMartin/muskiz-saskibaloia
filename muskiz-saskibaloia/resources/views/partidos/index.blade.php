@extends('layouts.app')

@section('title', 'Muskiz Saskibaloia')

@section('content')
<script>
    document.body.style.overflow = 'hidden';
        window.onbeforeunload = function() {
        document.body.style.overflow = 'auto';
    };
</script>
<main class="min-h-[70vh] p-10 max-w-[1200px] mx-auto">
<div class="absolute inset-0 -z-10">
        <img src="{{ asset('images/fotomuskiz.jpg') }}" 
             class="w-full h-full object-cover filter opacity-30 scale-110">
    </div>
     <h2 class="text-2xl font-bold mb-6">Partidos</h2>

    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-3 text-left">Fecha</th>
                <th class="p-3 text-left">Ubicación</th>
                <th class="p-3 text-left">Rival</th>
                <th class="p-3 text-left">Resultado</th>
            </tr>
        </thead>
        <tbody>
            @forelse($partidos as $partido)
                <tr class="border-b">
                    <td class="p-3">{{ $partido->fecha }}</td>
                    <td class="p-3">{{ $partido->ubicacion }}</td>
                    <td class="p-3">{{ $partido->equiporival }}</td>
                    <td class="p-3 font-semibold">{{ $partido->resultado }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="p-3 text-center">No hay partidos disponibles</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</main>
@endsection
