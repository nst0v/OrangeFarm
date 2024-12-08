<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('storage/logo.webp') }}" type="image/x-icon">
    <title>Оранжевая ферма</title>
    <!-- Подключение CSS через Vite -->
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Подключение Header -->
    @include('partials.header')

    <!-- Основной контент -->
    <main>
        @yield('content')
    </main>

    <!-- Подключение Footer -->
    @include('partials.footer')

    <!-- Подключение JS через Vite -->
    @vite('resources/js/app.js')
</body>
</html>
