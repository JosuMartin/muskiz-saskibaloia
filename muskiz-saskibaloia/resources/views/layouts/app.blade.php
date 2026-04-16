<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
    // Esto le dice al Tailwind de internet cuáles son tus animaciones personalizadas
    tailwind.config = {
      theme: {
        extend: {
          keyframes: {
            suavePulse: {
              '0%, 100%': { transform: 'scale(1)' },
              '50%': { transform: 'scale(1.05)' },
            }
          },
          animation: {
            vibrar: 'suavePulse 3s ease-in-out infinite',
          }
        }
      }
    }
</script>
    <title>@yield('title')</title>
</head>
<body class="flex flex-col min-h-screen">

    @include('partials.header') <div class="flex-grow">
        @yield('content')
    </div>

    @include('partials.footer') </body>
</html>