<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Интерфейс для поиска, чтения и размещения инструкций для техники">
    <meta name="author" content="ProRock">
    <title>@yield('title')</title>
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
    <header class="container bg-primary">
        <div class="row">
            <div class="col-3">
                <a href="{{asset('')}}"><i class="fas fa-home icon"></i></a>
            </div>
            <div class="col-6">
                <form class="input-group" method="get" action="{{asset('search')}}">
                    <input class="form-control" required type="search" name="searchText" id="searchText">
                    <input class="btn btn-success" type="submit" value="Поиск">
                </form>
            </div>
            <div class="col-3 d-flex justify-content-end">
                @if (session('user', '') != '')
                    <h4>User</h4>
                @else
                    <a href="{{asset('login')}}"><h4>Вход | Регистрация</h4></a>
                @endif
            </div>
        </div>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer class="container bg-primary">
        <div class="row">
            <div class="text-center">
                <h5>Автор: ProRock. 2021</h5>
            </div>
        </div>
    </footer>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>