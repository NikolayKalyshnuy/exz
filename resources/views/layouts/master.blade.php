<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Интерфейс для поиска, чтения и размещения инструкций для техники">
    <meta name="author" content="ProRock">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
</head>
<body>
    <header class="container">

    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer>

    </footer class="container">
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>