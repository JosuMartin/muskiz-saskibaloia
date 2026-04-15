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
    <div class="flex flex-col md:flex-row gap-20 h-full items-center">
        
        <div class="flex-1 bg-blue-300 p-8 rounded-3xl shadow-2xl min-h-[500px] w-[1000px] flex items-center">
            <div class="w-full h-[400px] rounded-2xl overflow-hidden my-auto">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2903.524188207135!2d-3.121367184522617!3d43.32271537913433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4ef7b5ed620d91%3A0xa40ac85955d70c89!2sPolideportivo%20San%20Juan%20de%20Muskiz!5e0!3m2!1ses!2ses!4v1700000000000"
                    class="w-full h-full border-0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>


        <div class="flex-1 bg-blue-300 p-8 rounded-3xl shadow-2xl h-[320px]">
        <h3 class="text-xl font-bold mt-4 mb-10 flex justify-center">¿Deseas ponerte en contacto con nosotros?</h3>
            <div class="flex justify-center items-center gap-5 mb-10">
            <img src="{{ asset('images/Gmail_icon.png') }}" alt="Logo" class="h-9 w-auto">
            <p>muskizsaskibaloiaberria@gmail.com</p>
            </div>
            <div class="flex justify-center items-center gap-5">
            <img src="{{ asset('images/Instagram_icon.png') }}" alt="Logo" class="h-10 w-auto">
            <a href="https://www.instagram.com/muskizsaskibaloia/"><p class="underline text-blue-600">muskizsaskibaloia</p></a>
            </div>
        </div>

    </div>
</main>
@endsection
