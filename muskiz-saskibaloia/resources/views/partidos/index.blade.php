@extends('layouts.app')

@section('title', 'Partidos - Muskiz Saskibaloia')

@section('content')
<script>
function videoCarousel() {
    return {
        currentIndex: 0,
        videos: [
            "https://www.youtube.com/embed/ZPvQX9VWEhc?rel=0&modestbranding=1&controls=1&mute=1&autoplay=1",
            "https://www.youtube.com/embed/cPnsMb9AYLI?rel=0&modestbranding=1&controls=1&mute=1&autoplay=1",  
            "https://www.youtube.com/embed/Ke7YfYDL7uw?rel=0&modestbranding=1&controls=1&mute=1&autoplay=1"
        ],
        nextIndex() { this.currentIndex = (this.currentIndex + 1) % this.videos.length; },
        prevIndex() { this.currentIndex = (this.currentIndex - 1 + this.videos.length) % this.videos.length; }
    }
}

window.addEventListener('scroll', function() {
    const footer = document.getElementById('main-footer');
    if (!footer) return;
    const scrollPosition = window.innerHeight + window.scrollY;
    const threshold = document.body.offsetHeight - 50;
    if (scrollPosition >= threshold) {
        footer.classList.remove('opacity-0', 'translate-y-full', 'pointer-events-none');
        footer.classList.add('opacity-100', 'translate-y-0');
    } else {
        footer.classList.add('opacity-0', 'translate-y-full', 'pointer-events-none');
        footer.classList.remove('opacity-100', 'translate-y-0');
    }
});
</script>

<main class="relative min-h-screen w-full p-6 md:p-10 flex flex-col items-center overflow-hidden">    
    {{-- Fondo --}}
    <div class="absolute inset-0 -z-10">
        <img src="{{ asset('images/fotomuskiz.webp') }}" class="w-full h-full object-cover filter opacity-30 scale-110">
    </div>

    <h1 class="text-3xl font-bold text-blue-900 uppercase tracking-wider mb-10 mt-10 drop-shadow-sm text-center">
        Calendario y Resultados
    </h1>

    <div class="flex flex-col xl:flex-row justify-center items-start gap-24 w-full max-w-[1400px]">
        
        {{-- COLUMNA IZQUIERDA: Vídeos (COMO ESTABA ANTES) --}}
        <div class="flex flex-col gap-3 items-center bg-[#1e90ff]/50 backdrop-blur-md rounded-xl shadow-xl p-1 border border-white/20">
            
            <div class="min-h-[500px] min-w-[400px] relative overflow-hidden rounded-t-xl bg-black group" x-data="videoCarousel()">
                <template x-for="(video, index) in videos" :key="index">
                    <div x-show="currentIndex === index" 
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         class="absolute inset-0 flex items-center justify-center">
                        
                        <iframe :src="video" 
                                class="h-full scale-150 transform -translate-x-1/2 left-1/2 absolute"
                                style="width: 200%; pointer-events: none;" 
                                allow="autoplay" 
                                frameborder="0">
                        </iframe>

                        <div class="absolute inset-0 z-10 bg-transparent"></div>
                    </div>
                </template>

                <button @click="prevIndex()" class="absolute left-2 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-[#1e90ff] p-2 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300 z-20">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                
                <button @click="nextIndex()" class="absolute right-2 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-[#1e90ff] p-2 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300 z-20">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>

            <p class="text-blue-900 font-bold uppercase text-[10px] tracking-widest mt-2">¡Mucho más en nuestro Instagram!</p>
            <a href="https://www.instagram.com/muskizsaskibaloia/" target="_blank" class="flex items-center gap-2 hover:opacity-75 transition-all mb-4 bg-white/50 px-4 py-1 rounded-full border border-white/50">
                <img src="{{ asset('images/Instagram_icon.webp') }}" alt="Instagram" class="h-6 w-auto">
                <span class="text-sm font-bold text-blue-900 tracking-tight uppercase">@muskizsaskibaloia</span>
            </a>    
        </div>

        {{-- COLUMNA DERECHA: Tabla con estilo unificado --}}
        <div class="w-full flex-1 overflow-x-auto bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl border border-blue-100">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-blue-900 text-white">
                        <th class="p-4 text-left font-bold uppercase tracking-wider text-xs">Fecha</th>
                        <th class="p-4 text-left font-bold uppercase tracking-wider text-xs">Ubicación</th>
                        <th class="p-4 text-left font-bold uppercase tracking-wider text-xs">Rival</th>
                        <th class="p-4 text-center font-bold uppercase tracking-wider text-xs">Resultado</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @forelse($partidos as $partido)
                        <tr class="border-b border-blue-50 hover:bg-blue-50/50 transition-colors">
                            <td class="p-4 font-medium">{{ $partido->fecha }}</td>
                            <td class="p-4 text-sm">{{ $partido->ubicacion }}</td>
                            <td class="p-4 font-bold text-blue-900 uppercase italic">{{ $partido->equiporival }}</td>
                            <td class="p-4 text-center">
                                <span class="bg-blue-100 text-blue-900 px-4 py-1 rounded-full font-black text-xs border border-blue-200">
                                    {{ $partido->resultado ?? 'PRÓXIMO' }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="p-10 text-center font-semibold text-gray-400 italic">No hay partidos disponibles próximamente</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="h-40"></div>
</main>
@endsection