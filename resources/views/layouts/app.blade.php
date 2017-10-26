<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description')">
    <link rel="shortcut icon" href="/img/favicon.png">
    @yield('css')
    <title>@yield('title', 'Shortlife-quest')</title>
</head>
<body>

@stack('scripts')
</body>
</html>