@extends('layouts.app')

@section('title', 'Contacto - Muskiz Saskibaloia')

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

<main class="relative min-h-screen w-full p-6 md:p-10 flex flex-col items-center justify-center overflow-hidden">    
    {{-- Fondo Unificado --}}
    <div class="absolute inset-0 -z-10">
        <img src="{{ asset('images/fotomuskiz.webp') }}" class="w-full h-full object-cover filter opacity-30">
    </div>

    <div class="w-full max-w-[600px] bg-white/90 backdrop-blur-md p-8 rounded-3xl shadow-2xl border border-blue-100 mt-10">
        <div class="flex flex-col items-center mb-8">
            <img src="{{ asset('images/Gmail_icon.webp') }}" alt="Gmail" class="h-12 w-auto mb-4">
            <h1 class="text-3xl font-bold text-blue-900 uppercase tracking-wider text-center">
                Contacta con nosotros
            </h1>
            <p class="text-gray-600 text-sm mt-2 text-center font-medium">
                Escríbenos y te responderemos lo antes posible.
            </p>
        </div>

        {{-- Formulario --}}
            <form action="{{ route('contacto.send') }}" method="POST" class="flex flex-col gap-5">
            @csrf
            <div>
                <label class="block text-blue-900 font-bold uppercase text-xs tracking-widest mb-2 ml-1">Nombre Completo</label>
                <input type="text" name="name" required 
                    class="w-full px-4 py-3 rounded-xl border border-blue-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                    placeholder="Tu nombre...">
            </div>

            <div>
                <label class="block text-blue-900 font-bold uppercase text-xs tracking-widest mb-2 ml-1">Correo Electrónico</label>
                <input type="email" name="email" required 
                    class="w-full px-4 py-3 rounded-xl border border-blue-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                    placeholder="ejemplo@gmail.com">
            </div>

            <div>
                <label class="block text-blue-900 font-bold uppercase text-xs tracking-widest mb-2 ml-1">Asunto</label>
                <select name="subject" class="w-full px-4 py-3 rounded-xl border border-blue-100 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                    <option value="informacion">Información General</option>
                    <option value="tienda">Duda sobre Tienda</option>
                    <option value="inscripcion">Inscripciones / Cantera</option>
                    <option value="otros">Otros</option>
                </select>
            </div>

            <div>
                <label class="block text-blue-900 font-bold uppercase text-xs tracking-widest mb-2 ml-1">Mensaje</label>
                <textarea name="message" rows="4" required 
                    class="w-full px-4 py-3 rounded-xl border border-blue-100 focus:ring-2 focus:ring-blue-500 outline-none transition-all resize-none"
                    placeholder="Escribe aquí tu mensaje..."></textarea>
            </div>

            <button type="submit" 
                class="mt-4 bg-blue-900 hover:bg-blue-800 text-white font-bold py-4 rounded-xl uppercase tracking-widest shadow-lg transition-all active:scale-95">
                Enviar Mensaje
            </button>
        </form>
    </div>

    {{-- Info adicional debajo --}}
    <div class="mt-10 flex flex-col items-center gap-2">
        <p class="text-blue-900 font-bold text-xs uppercase tracking-tighter italic">También puedes escribirnos directamente a:</p>
        <p class="text-blue-900 font-black">muskizsaskibaloiaberria@gmail.com</p>
    </div>

    <div class="h-40"></div>
</main>
@endsection