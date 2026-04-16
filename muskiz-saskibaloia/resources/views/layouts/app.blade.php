<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>@yield('title')</title>
</head>
<body class="flex flex-col min-h-screen">

    @include('partials.header') <div class="flex-grow">
        @yield('content')
    </div>

    @include('partials.footer') </body>
</html>