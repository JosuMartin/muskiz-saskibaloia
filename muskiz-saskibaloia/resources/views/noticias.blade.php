@extends('layouts.app')

@section('title', 'Muskiz Saskibaloia')

@section('content')
<script>
    document.body.style.overflow = 'hidden';
    window.onbeforeunload = function() {
        document.body.style.overflow = 'auto';
    };
</script>
<main class="min-h-[70vh] p-10 max-w-[1200px] mx-auto overscroll-y-none flex-col items-center justify-center">    
     <div class="absolute inset-0 -z-10">
        <img src="{{ asset('images/fotomuskiz.jpg') }}" 
             class="w-full h-full object-cover filter opacity-30 scale-110">
    </div>

    <div class="flex flex-row min-h-[550px] justify-center items-center gap-[250px]">
    
        <div class="animate-vibrar min-w-[300px] min-h-[400px] bg-blue-300 flex items-center justify-center rounded-2xl">
        <img src="{{ asset('images/noticia1.jpg') }}" >
        </div>

        <div class="animate-vibrar min-w-[300px] min-h-[400px] bg-blue-300 flex items-center justify-center rounded-2xl">
        <img src="{{ asset('images/noticia2.jpg') }}" >
        </div>

        <div class="animate-vibrar min-w-[300px] min-h-[400px] bg-blue-400 flex items-center justify-center rounded-2xl">
        <p>Mas noticias proximamente</p>
        </div>

    </div>
</main>
@endsection