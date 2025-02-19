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
<body>
    <header class="bg-primary text-white p-3 text-center">
        <h1>Mi Aplicación</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center p-3 mt-4">
        &copy; {{ date('Y') }} Mi Aplicación. Todos los derechos reservados.
    </footer>

    <!-- Scripts de JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('scripts')
</body>
</html>
