<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оранжевая ферма</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.header') <!-- Подключаем header -->

    <main>
        @yield('content') <!-- Здесь будет основной контент -->
    </main>

    @include('partials.footer') <!-- Подключаем footer -->

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
