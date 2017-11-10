<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Свинг-квест">
    <link rel="shortcut icon" href="/img/favicon.png">
    <link href="/css/style.css" rel="stylesheet">
    @yield('css')
    <title>Свинг-квест</title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">

        <div class="navbar-header">
            <a class="navbar-brand" href="/">Shortlife.ru</a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="btn btn-simple">Свинг-квест</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">

    <div class="header">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <div class="main">
        <div class="section text-center landing-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Свинг в Кирове</h2>
                        <h5>
                            Знакомства, общение, встречи и вечеринки.
                            <br>
                            Присоединятесь!
                        </h5>
                        <br>
                        <a href="https://swing-kiska.ru" class="btn btn-danger btn-fill">swing-kiska.ru</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<footer class="footer section-dark">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <li><a href="/">shortlife.ru</a></li>
                <li><a>Свинг-квест</a></li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; 2017, Shortlife
        </div>
    </div>
</footer>

<script src="/js/script.js"></script>
@stack('scripts')
</body>
</html>