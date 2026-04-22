<header class="w-full sticky top-0 z-50 shadow-md">
    <div class="w-full bg-blue-900 h-12 flex items-center">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <h1 class="text-xs md:text-sm text-blue-100 font-medium tracking-wider">
                WEB OFICIAL DEL CLUB DEPORTIVO MUSKIZ SASKIBALOIA
            </h1>
            
            <div class="flex gap-6 items-center">
                <a href="mailto:..." class="flex items-center gap-2 text-white hover:text-blue-200 transition-colors">
                    <img src="{{ asset('images/Gmail_icon.webp') }}" alt="Gmail" class="h-4 w-auto">
                    <span class="text-xs hidden md:block">muskizsaskibaloiaberria@gmail.com</span>
                </a>
                <a href="https://instagram.com/..." target="_blank" class="flex items-center gap-2 text-white hover:text-blue-200 transition-colors">
                    <img src="{{ asset('images/Instagram_icon.webp') }}" alt="Instagram" class="h-5 w-auto">
                    <span class="text-xs hidden md:block">@muskizsaskibaloia</span>
                </a>
            </div>
        </div>
    </div>

    <div class="w-full bg-gradient-to-b from-white to-gray-100 border-b border-blue-200">
        <div class="container mx-auto px-6 flex items-center justify-between h-24">
            
            <div class="flex-shrink-0">
                <a href="/" class="transition-transform hover:scale-105 block">
                    <img src="{{ asset('images/muskiz.webp') }}" alt="Logo" class="h-16 md:h-20 w-auto">
                </a>
            </div>

            <nav class="hidden md:flex h-full">
                <ul class="flex items-stretch gap-8 font-bold group/nav h-full">
                    @php
                        $links = [
                            ['name' => 'Inicio', 'url' => '/', 'active' => request()->is('/')],
                            ['name' => 'Tienda', 'url' => '/tienda', 'active' => request()->is('tienda*')],
                            ['name' => 'Partidos', 'url' => '/partidos', 'active' => request()->is('partidos*')],
                            ['name' => 'Contacto', 'url' => '/contacto', 'active' => request()->is('contacto*')],

                        ];
                    @endphp

                    @foreach($links as $link)
                        <li class="relative flex items-center group">
                            <a href="{{ $link['url'] }}" 
                               class="text-xl transition-all duration-300 py-2
                               {{ $link['active'] 
                                  ? 'text-blue-900 group-hover/nav:text-gray-500 hover:!text-blue-900' 
                                  : 'text-gray-500 hover:text-blue-900' }}">
                                
                                {{ $link['name'] }}

                                <span class="absolute bottom-0 left-0 w-full h-1 bg-blue-900 transform transition-transform duration-300
                                    {{ $link['active'] 
                                       ? 'scale-x-100 group-hover/nav:scale-x-0 group-hover:!scale-x-100' 
                                       : 'scale-x-0 group-hover:scale-x-100' }}">
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>