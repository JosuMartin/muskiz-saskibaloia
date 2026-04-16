@extends('layouts.app')

@section('title', 'Muskiz Saskibaloia')

@section('content')
<script>
    document.body.style.overflow = 'hidden';
    window.onbeforeunload = function() {
        document.body.style.overflow = 'auto';
    };
</script>
<main class="min-h-[70vh] p-10 max-w-[1200px] mx-auto overscroll-y-none flex items-center justify-center">    
    <div class="absolute inset-0 -z-10">
        <img src="{{ asset('images/fotomuskiz.jpg') }}" 
             class="w-full h-full object-cover filter opacity-30 scale-110">
    </div>

    <div>

    <div class="flex flex-col md:flex-row gap-20 h-full">
            <img src="{{ asset('images/ropa1.jpg') }}" class="h-50 max-w-80">
            <img src="{{ asset('images/ropa2.jpg') }}" class="h-50 max-w-80">
            <img src="{{ asset('images/ropa3.jpg') }}" class="h-50 max-w-80">
    </div>

    <div class="flex-1 bg-blue-300 p-8 rounded-3xl shadow-2xl min-h-[20px] mt-20">
        <h3 class="text-xl font-bold mt-1 mb-3 flex justify-center">¿Estas interesado?</h3>
        <p class="text-center mb-1">¡Si estas interesado en cualquiera de nuestras prendas disponibles contacta con nosotros a traves de nuestro correo electronico!</p>
            <div class="flex justify-center items-center gap-5">
            <img src="{{ asset('images/Gmail_icon.png') }}" alt="Logo" class="h-9 w-auto">
            <p>muskizsaskibaloiaberria@gmail.com</p>
            </div>
        </div>

    </div>
</main>
@endsection
