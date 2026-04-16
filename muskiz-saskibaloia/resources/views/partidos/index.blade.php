@extends('layouts.app')

@section('title', 'Muskiz Saskibaloia')

@section('content')
<script>
function videoCarousel() {
    return {
        currentIndex: 0,
        videos: [
            "https://drive.google.com/file/d/1Xm8a-BPXRmT80JYjq1I6li9_eApESgut/preview",
            "https://drive.google.com/file/d/1izgy6SnIX1gXC7nArD0rnl1wqA6AgAMd/preview",
            "https://drive.google.com/file/d/1ySbRbbCKiuWMB5OMcVOC3KwNXyPh63jN/preview"
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

 <div class="min-h-[500px] min-w-[400px] relative overflow-hidden rounded-xl bg-black group" x-data="videoCarousel()">
    <template x-for="(video, index) in videos" :key="index">
        <div x-show="currentIndex === index" 
             x-transition:enter="transition ease-out duration-500"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             class="absolute inset-0 flex items-center justify-center">
            
            <iframe :src="video" 
                    class="h-full scale-150 transform -translate-x-1/2 left-1/2 absolute"
                    style="width: 200%;" 
                    allow="autoplay" 
                    frameborder="0">
            </iframe>
        </div>
    </template>

    <button @click="prevIndex()" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white/50 p-2 rounded-full opacity-0 group-hover:opacity-100 transition z-20">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
    </button>
    <button @click="nextIndex()" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white/50 p-2 rounded-full opacity-0 group-hover:opacity-100 transition z-20">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
    </button>
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
