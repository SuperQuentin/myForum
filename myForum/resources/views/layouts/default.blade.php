<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','myForum')</title>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body class="container">
        <div class="w-100 bg-primary font-weight-bolder p-5 navbar">
            <a class="text-reset" href="/">
                <h1>{{ env('APP_NAME') }}</h1>
            </a>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Utilisateurs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Alexandre</a>
                        <a class="dropdown-item" href="#">Andi</a>
                        <a class="dropdown-item" href="#">Cyril</a>
                        <a class="dropdown-item" href="#">Dimitri</a>
                        <a class="dropdown-item" href="#">Dylan</a>
                        <a class="dropdown-item" href="#">Gabriel</a>
                        <a class="dropdown-item" href="#">Mathieu</a>
                        <a class="dropdown-item" href="#">Quentin</a>
                        <a class="dropdown-item" href="#">Sou</a>
                        <a class="dropdown-item" href="#">William</a>
                        <a class="dropdown-item" href="#">Xavier</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" class="btn">Gestion des thèmes</a></li>
                <li class="nav-item"><a href="{{ route('references.index') }}" class="btn">Gestion des références</a></li>
                <li class="nav-item"><a href="#" class="btn">Gestion des rôles</a></li>
                <li class="nav-item"><a href="#" class="btn">Gestion des états</a></li>
                <li class="nav-item"><a href="#" class="btn">Modération</a></li>
            </ul>
        </nav>
        <div class="container p-3">
            @yield('content')
        </div>
        <script src="{{ asset('/js/bootstrap.js') }}">
        <script src="{{ asset('/js/app.js') }}">
    </body>
</html>


