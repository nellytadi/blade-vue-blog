<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Blog</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="d-flex flex-column h-100">

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Vue-Blade</a>

        <div class="mx-auto" >
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/create">Create Blog</a>
                </li>
            </ul>

        </div>
    </nav>
</header>


@yield('content')



<footer class="footer mt-auto py-3">
    <div class="container text-center">
        <span>This is a really cool project!</span>
        <p class="text-muted">Copyright 🄯 2021</p>
    </div>
</footer>


</body>
</html>


