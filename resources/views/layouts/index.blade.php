<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Andrey Kuznetsov')</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="/">Домой</a></li>
            <li><a href="/about">Обо мне</a></li>
            <li><a href="/contact">Контакты</a></li>
        </ul>
    </header>

    @yield('content')
</body>
</html>