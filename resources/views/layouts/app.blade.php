<!DOCTYPE html>
<html lang="da-DK">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Saigoner Bistro — Vietnamesisk Restaurant i København Ø')</title>

    <link rel="icon" href="{{ asset('images/brand/favicon-32.jpg') }}" sizes="32x32">
    <link rel="icon" href="{{ asset('images/brand/favicon-192.jpg') }}" sizes="192x192">
    <link rel="apple-touch-icon" href="{{ asset('images/brand/favicon-192.jpg') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="d-flex flex-column min-vh-100">
    @include('partials.navbar')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.lightbox')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts')
</body>
</html>

