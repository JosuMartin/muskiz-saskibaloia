<header class="w-full bg-gradient-to-b from-white to-[#1e90ff] border-b border-blue-200">
    <div class="max-w-full mx-auto flex flex-col sm:flex-row items-stretch justify-between h-32">
        
        <div class="flex items-center px-8 py-4">
            <a href="/" class="block">
                <img src="{{ asset('images/muskiz.webp') }}" alt="Logo" class="h-24 w-auto">
            </a>
        </div>

        <nav class="flex flex-1">
            <ul class="flex flex-1 items-stretch list-none m-0 p-0 text-black font-bold">
                
                <li class="flex flex-1">
                    <a href="/" class="group relative flex flex-1 items-center justify-center text-2xl transition-all duration-300 
                        {{ request()->is('/') ? 'bg-[#1a75cf] text-white' : 'text-blue-900 hover:bg-[#1e90ff] hover:text-white' }}">
                        Inicio
                        <span class="absolute bottom-2 left-1/2 h-1 bg-white transition-all duration-300 -translate-x-1/2 
                            {{ request()->is('/') ? 'w-1/2' : 'w-0 group-hover:w-1/2' }}"></span>
                    </a>
                </li>

                <li class="flex flex-1">
                    <a href="/noticias" class="group relative flex flex-1 items-center justify-center text-2xl transition-all duration-300 
                        {{ request()->is('noticias*') ? 'bg-[#1a75cf] text-white' : 'text-blue-900 hover:bg-[#1e90ff] hover:text-white' }}">
                        Noticias
                        <span class="absolute bottom-2 left-1/2 h-1 bg-white transition-all duration-300 -translate-x-1/2 
                            {{ request()->is('noticias*') ? 'w-1/2' : 'w-0 group-hover:w-1/2' }}"></span>
                    </a>
                </li>

                <li class="flex flex-1">
                    <a href="/tienda" class="group relative flex flex-1 items-center justify-center text-2xl transition-all duration-300 
                        {{ request()->is('tienda*') ? 'bg-[#1a75cf] text-white' : 'text-blue-900 hover:bg-[#1e90ff] hover:text-white' }}">
                        Tienda
                        <span class="absolute bottom-2 left-1/2 h-1 bg-white transition-all duration-300 -translate-x-1/2 
                            {{ request()->is('tienda*') ? 'w-1/2' : 'w-0 group-hover:w-1/2' }}"></span>
                    </a>
                </li>

                <li class="flex flex-1">
                    <a href="/partidos" class="group relative flex flex-1 items-center justify-center text-2xl transition-all duration-300 
                        {{ request()->is('partidos*') ? 'bg-[#1a75cf] text-white' : 'text-blue-900 hover:bg-[#1e90ff] hover:text-white' }}">
                        Partidos
                        <span class="absolute bottom-2 left-1/2 h-1 bg-white transition-all duration-300 -translate-x-1/2 
                            {{ request()->is('partidos*') ? 'w-1/2' : 'w-0 group-hover:w-1/2' }}"></span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</header>