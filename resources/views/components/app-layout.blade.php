<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mi Aplicación')</title>

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')

    @stack('styles')
</head>
<body class="font-comfortaa text-gray-900 antialiased">

    <div class="min-h-screen bg-gray-100">
        @include('layouts.navbar')

        <main>
            @if ((isset($back) && $back) || (isset($title) && $title))
                @include('layouts.header-title-layout')
            @endif
            <div class="{{ (isset($back) && $back) || (isset($title) && $title) ? 'mt-6' : 'mt-0' }}">
                {{ $slot }}
            </div>
        </main>
    </div>

    <!-- Scripts de JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('scripts')
</body>
</html>
