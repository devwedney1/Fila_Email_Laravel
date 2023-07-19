<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonte do Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">


    <!-- css da aplicação -->
    <link rel="stylesheet" href="/css/stylesheet.css">
    <script src="/js/scripts.js"></script>

</head>

<body>
    @yield('content')

    <div class="title_main">
        <h1>Universidade Patativa</h1>
    </div>

    <div class="history">
        <p>
            Desde 2001
            Fundada em 2001, a Universidade Patativa do Assaré – UPA, é uma organização não governamental sediada na cidade de Juazeiro do Norte, no Cariri cearense, que tem como missão atual contribuir para o desenvolvimento sustentável de comunidades urbanas e rurais de todo o País, como foco prioritário na formação humana e no exercício pleno da cidadania
        </p>
    @guest
    </div>

    <div class="login">
        <a href="../../auth/login.blade.php">Login</a>
    </div>

    <div class="registe">
        <a href="../../auth/register.blade.php">Register</a>
    </div>
    @endguest
    <footer>
        <p>Teste Universidade Patativa &copy; 2023</p>
    </footer>
</body>