@extends('layouts.app')

@section('title', 'Muskiz Saskibaloia')

@section('content')
<script>
function videoCarousel() {
    return {
        currentIndex: 0,
        // SUSTITUYE "ID_VIDEO_X" por el código que sale en la URL de tu vídeo de YouTube
        // Ejemplo: si el vídeo es https://www.youtube.com/watch?v=dQw4w9WgXcQ, el ID es dQw4w9WgXcQ
        videos: [
            "https://www.youtube.com/embed/cPnsMb9AYLI?rel=0&modestbranding=1&controls=1&mute=1&autoplay=1",  
            "https://www.youtube.com/embed/Ke7YfYDL7uw?rel=0&modestbranding=1&controls=1&mute=1&autoplay=1",
            "https://www.youtube.com/embed/ZPvQX9VWEhc?rel=0&modestbranding=1&controls=1&mute=1&autoplay=1"    
            ],
        nextIndex() {
            this.currentIndex = (this.currentIndex + 1) % this.videos.length;
        },
        prevIndex() {
            this.currentIndex = (this.currentIndex - 1 + this.videos.length) % this.videos.length;
        }
    }
}
</script>
<script>
    document.body.style.overflow = 'hidden';
        window.onbeforeunload = function() {
        document.body.style.overflow = 'auto';
    };
</script>

<main class="min-h-[70vh] p-10 max-w-[1200px] mx-auto">
<div class="absolute inset-0 -z-10">
    <img src="{{ asset('images/fotomuskiz.jpg') }}" class="w-full h-full object-cover filter opacity-30 scale-110">
</div>

<div class="flex flex-row justify-center gap-[200px] mt-[50px]">

<div class="flex flex-col gap-3 items-center bg-[#1e90ff]/50 backdrop-blur-md rounded-xl shadow-sm -mb-3">

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
    <p>Este contenido y mucho mas en nuesto Instagram!</p>
    <a href="https://www.instagram.com/muskizsaskibaloia/" target="_blank" class="flex items-center gap-2 hover:opacity-75 transition-all mb-3">
                    <img src="{{ asset('images/Instagram_icon.png') }}" alt="Instagram" class="h-8 w-auto">
                    <p class="text-sm font-semibold text-blue-900">muskizsaskibaloia</p>
                </a>    
    </div>
    <div>
    <table class="w-full border-collapse min-w-[600px]">
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
    </div>
</div>
</main>
@endsection
