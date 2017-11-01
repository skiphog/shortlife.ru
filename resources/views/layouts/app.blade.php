<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description','swing-quest')">
    <link rel="shortcut icon" href="/img/favicon.png">
    <link href="/css/app.css" rel="stylesheet" />
    @yield('css')
    <title>@yield('title', 'Свинг-квест')</title>
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
            <div class="motto">
                <h3>Вопрос №1: Вид свинга</h3>
                <p>Без обмена партнерами &mdash; Мягкий свинг</p>
                <p>Совместный (классический) &mdash; Открытый свинг</p>
                <p>В разных комнатах &mdash; Закрытый свинг</p>
                <p>Обмен на длительное время &mdash; ...</p>
                <br>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <input type="text" placeholder="Введите ответ" class="form-control">
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <button class="btn btn-fill btn-danger">Ответить</button>
                </div>
            </div>

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
<script src="/js/app.js"></script>
@stack('scripts')
</body>
</html>