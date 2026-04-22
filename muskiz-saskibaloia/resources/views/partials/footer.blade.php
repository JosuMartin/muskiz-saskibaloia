<footer id="main-footer" 
    class="fixed bottom-0 left-0 w-full bg-slate-50 border-t-4 border-blue-900 pt-10 pb-6 
           opacity-0 translate-y-full pointer-events-none transition-all duration-700 ease-in-out z-50">
    <div class="container mx-auto px-6">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">
            
            <div class="flex flex-col items-start">
                <img src="{{ asset('images/muskiz.webp') }}" alt="Logo Muskiz" class="h-20 w-auto mb-4 grayscale hover:grayscale-0 transition-all">
                <p class="text-sm text-gray-600 leading-relaxed font-medium tracking-wide">
                    Fomentando el baloncesto en Muskiz desde la base. Pasión, esfuerzo y trabajo en equipo.
                </p>
            </div>

            <div class="flex flex-col">
                <h4 class="text-blue-900 font-bold uppercase mb-4 tracking-wider text-xl">Contacto</h4>
                <div class="space-y-3">
                    <a href="mailto:muskizsaskibaloiaberria@gmail.com" class="flex items-center gap-3 text-sm font-semibold text-gray-600 hover:text-blue-900 transition-colors">
                        <img src="{{ asset('images/Gmail_icon.webp') }}" class="h-5 w-auto">
                        muskizsaskibaloiaberria@gmail.com
                    </a>
                    <a href="https://instagram.com/muskizsaskibaloia" class="flex items-center gap-3 text-sm font-semibold text-gray-600 hover:text-blue-900 transition-colors">
                        <img src="{{ asset('images/Instagram_icon.webp') }}" class="h-5 w-auto">
                        @muskizsaskibaloia
                    </a>
                    <div class="flex items-start gap-3 text-sm font-semibold text-gray-600">
                        <img src="{{ asset('images/ubi.webp') }}" class="h-5 w-auto mt-1">
                        <span class="uppercase">29 bis, C. la Cendeja, 48550 Muskiz, Bizkaia</span>
                    </div>
                </div>
            </div>

            <div class="flex flex-col">
                <h4 class="text-blue-900 font-bold uppercase mb-4 tracking-wider text-xl">Colaboradores</h4>
                <div class="flex flex-wrap items-center gap-6">
                    <a href="https://www.muskiz.org" target="_blank" class="opacity-70 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('images/udala.webp') }}" class="h-14 w-auto">
                    </a>
                    <a href="https://www.steelphalt.com" target="_blank" class="opacity-70 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('images/steelphalt.webp') }}" class="h-5 w-auto">
                    </a>
                    <a href="https://petronor.eus" target="_blank" class="opacity-70 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('images/petronor.webp') }}" class="h-5 w-auto">
                    </a>
                </div>
            </div>

        </div>

        <div class="border-t border-gray-200 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-xs text-gray-500 uppercase tracking-widest font-medium">
                © {{ date('Y') }} C.D. MUSKIZ SASKIBALOIA - Todos los derechos reservados.
            </p>
            <div class="flex gap-4 text-xs font-bold text-gray-400">
                <a href="#" class="hover:text-blue-900 transition-colors">AVISO LEGAL</a>
                <span>|</span>
                <a href="#" class="hover:text-blue-900 transition-colors">PRIVACIDAD</a>
                <span>|</span>
                <p class="text-gray-400 font-bold">DISEÑO POR JOSU MARTÍN</p>
            </div>
        </div>
    </div>
</footer>