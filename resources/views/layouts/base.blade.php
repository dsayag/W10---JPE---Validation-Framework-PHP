<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><img src="/img/logo-dwmg3.png" width="112" height="40" class="logo"></li>
                <li><a href="/home">Home</a></li>
                <li><a href="/listCharacters">Characters</a></li>
                <li><a href="/addCharacter">Add a character</a></li>
                <li><a href="/listDesigners">Designers</a></li>
                <li><a href="/addDesigner">Add a designer</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        
    </footer>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
</body>
</html>