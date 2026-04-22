@extends('layouts.app')

@section('title', 'Tienda - Muskiz Saskibaloia')

@section('content')
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

{{-- Eliminamos min-h-[70vh] y usamos min-h-screen para que el fondo cubra todo sin dejar blancos --}}
<main class="relative min-h-screen w-full p-10 flex flex-col items-center justify-center overflow-hidden">    
    {{-- Fondo que ocupa TODA la pantalla --}}
    <div class="absolute inset-0 -z-10">
        <img src="{{ asset('images/fotomuskiz.webp') }}" 
             class="w-full h-full object-cover filter opacity-30">
    </div>

    {{-- Contenedor de productos --}}
     <div class="flex flex-col md:flex-row gap-20 h-full mb-10">

            <img src="{{ asset('images/ropa1.webp') }}" class="max-w-[440px] rounded-2xl">

            <img src="{{ asset('images/ropa2.webp') }}" class="max-w-[440px] rounded-2xl">

            <img src="{{ asset('images/ropa3.webp') }}" class="max-w-[440px] rounded-2xl">

    </div>

    {{-- Bloque de contacto CENTRADO --}}
    <div class="animate-vibrar w-full max-w-[700px] bg-blue-600/30 backdrop-blur-md p-6 rounded-2xl shadow-xl border border-white/20 mx-auto">
        <h3 class="text-2xl font-bold text-center text-blue-900 uppercase tracking-wider mb-2">
            ¿Estás interesado?
        </h3>
        
        <p class="text-center text-sm font-medium text-gray-800 mb-5 px-6 leading-snug">
            ¡Si te interesa alguna de nuestras prendas, contacta con nosotros vía email!
        </p>
        
        {{-- Píldora de email: más compacta y con fuentes del footer --}}
        <div class="flex justify-center items-center gap-3 bg-white rounded-full shadow-md py-2 px-6 max-w-fit mx-auto border border-blue-100">
            <img src="{{ asset('images/Gmail_icon.webp') }}" alt="Gmail" class="h-6 w-auto">
            <p class="text-sm md:text-base font-semibold text-blue-900 tracking-tight">
                muskizsaskibaloiaberria@gmail.com
            </p>
        </div>
    </div>

    {{-- El espaciador ahora es proporcional para que el footer no tape el contacto --}}
    <div class="h-40"></div>
</main>
@endsection