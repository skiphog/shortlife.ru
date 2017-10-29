<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description','Shortlife.ru')">
    <link rel="shortcut icon" href="/img/favicon.png">
    <link href="/css/app.css" rel="stylesheet" />
    @yield('css')
    <title>@yield('title', 'Shortlife-quest')</title>
</head>
<body>
<nav class="navbar navbar-default" role="navigation-demo" id="demo-navbar">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Shortlife.ru</a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-example-2">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="btn btn-simple">Блог</a>
                </li>
                <li>
                    <a href="#" class="btn btn-simple">Квест</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
    <div class="header">
        <div class="container">
            <div class="motto">
                <h2 class="title-uppercase">Супер пупер квест</h2>
                <h3>Start designing your landing page here.</h3>
                <br>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn"><i class="fa fa-play"></i>Watch video</a>
                <a class="btn">Download</a>
            </div>

        </div>
    </div>

    <div class="main">
        <div class="section text-center landing-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Let's talk product</h2>
                        <h5>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
                        <br>
                        <a href="#" class="btn btn-danger btn-fill">See Details</a>
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
                <li><a href="https://swing-kiska.ru">swing-kiska.ru</a></li>
                <li><a href="#">Блог</a></li>
                <li><a href="#">Квест</a></li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; 2017, made with <i class="fa fa-heart heart"></i> by Shortlife
        </div>
    </div>
</footer>
<script src="/js/app.js"></script>
@stack('scripts')
</body>
</html>