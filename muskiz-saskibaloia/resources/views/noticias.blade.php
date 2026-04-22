@extends('layouts.app')

@section('title', 'Muskiz Saskibaloia')

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
<main class="min-h-[70vh] p-10 max-w-[1200px] mx-auto overscroll-y-none flex-col items-center justify-center">    
     <div class="absolute inset-0 -z-10">
        <img src="{{ asset('images/fotomuskiz.webp') }}" 
             class="w-full h-full object-cover filter opacity-30 scale-110">
    </div>

    <div class="flex flex-row min-h-[550px] justify-center items-center gap-[250px]">
    
        <div class="animate-vibrar min-w-[300px] min-h-[400px] bg-blue-300 flex items-center justify-center rounded-2xl">
        <img src="{{ asset('images/noticia1.webp') }}" >
        </div>

        <div class="animate-vibrar min-w-[300px] min-h-[400px] bg-blue-300 flex items-center justify-center rounded-2xl">
        <img src="{{ asset('images/noticia2.webp') }}" >
        </div>

        <div class="animate-vibrar min-w-[300px] min-h-[400px] bg-blue-400 flex items-center justify-center rounded-2xl">
        <p>Mas noticias proximamente</p>
        </div>

    </div>
</main>
<div class="h-80"></div>

@endsection