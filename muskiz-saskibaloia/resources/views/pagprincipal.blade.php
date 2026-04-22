@extends('layouts.app')

@section('title', 'Muskiz Saskibaloia')

@section('content')

{{-- 1. SECCIÓN DE INICIO --}}
<section class="relative min-h-screen w-full flex items-center justify-center p-6 overflow-hidden">
    <div class="absolute inset-0 -z-10">
        <img src="{{ asset('images/fotomuskiz.webp') }}" class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-white/20"></div>
    </div>

    <div class="max-w-[1000px] w-full flex flex-col items-center pt-20">
        <h1 class="animate-vibrar text-4xl font-bold mb-8 text-blue-900 drop-shadow-sm">Muskiz Saskibaloia</h1>
        
        <div class="bg-blue-500/20 backdrop-blur-md p-8 rounded-2xl border border-white/30 shadow-lg mb-12">
            <p class="text-xl text-gray-900 leading-relaxed text-center font-medium">
                Muskiz Saskibaloia, club creado el año 1991 y retomado por Oier Alonso, Josu Martin Valdivielso y Eneko Perez Moar como nueva directiva en 2023. <strong>¡Aupa Muskiz!</strong>
            </p>
        </div>
        
        {{-- Carousel con Controles --}}
        <div id="default-carousel" class="relative w-full max-w-4xl shadow-2xl rounded-2xl overflow-hidden" data-carousel="slide">
            <div class="relative h-64 md:h-[450px]">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/image1.webp') }}" class="absolute block w-full h-full object-cover">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/image2.webp') }}" class="absolute block w-full h-full object-cover">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/fotomuskiz.webp') }}" class="absolute block w-full h-full object-cover">
                </div>
            </div>

            {{-- Flechas de Control --}}
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </span>
            </button>
        </div>
    </div>
</section>

{{-- 2. SECCIÓN DE NOTICIAS --}}
<section class="relative min-h-screen w-full flex flex-col items-center justify-center p-10">
    <div class="absolute inset-0 -z-10">
        <img src="{{ asset('images/image2.webp') }}" class="w-full h-full object-cover opacity-20">
    </div>

    <h2 class="text-4xl font-black mb-16 text-blue-900 uppercase tracking-tighter italic">Últimas Noticias</h2>

    {{-- Grid con alineación centrada para que si tienen alturas distintas no se vea mal --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full max-w-[1200px] items-stretch">
        
        {{-- Tarjeta 1 --}}
        <div class="group relative overflow-hidden rounded-3xl shadow-xl transition-transform hover:-translate-y-2 flex flex-col bg-blue-900">
            {{-- La imagen manda en el tamaño del contenedor --}}
            <img src="{{ asset('images/noticia1.webp') }}" class="w-full h-auto block">
            
            {{-- Overlay de texto degradado --}}
            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-transparent to-transparent opacity-90 flex items-end p-6">
                <p class="text-white font-bold text-lg leading-tight uppercase">Resumen del último partido</p>
            </div>
        </div>

        {{-- Tarjeta 2 --}}
        <div class="group relative overflow-hidden rounded-3xl shadow-xl transition-transform hover:-translate-y-2 flex flex-col bg-blue-900">
            <img src="{{ asset('images/noticia2.webp') }}" class="w-full h-auto block">
            
            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-transparent to-transparent opacity-90 flex items-end p-6">
                <p class="text-white font-bold text-lg leading-tight uppercase">Nuevos fichajes 2024</p>
            </div>
        </div>

        {{-- Tarjeta 3 (Próximamente) - Ajustamos su altura para que coincida con las otras --}}
        <div class="bg-blue-900 flex flex-col items-center justify-center rounded-3xl p-8 shadow-xl text-center min-h-full border-4 border-blue-800 border-dashed">
            <div class="w-16 h-16 border-4 border-blue-400 border-t-transparent rounded-full animate-spin mb-6"></div>
            <p class="text-white/50 font-bold text-2xl uppercase italic">Próximamente...</p>
        </div>
    </div>

    <div class="h-80"></div>
</section>

<script>
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

@endsection