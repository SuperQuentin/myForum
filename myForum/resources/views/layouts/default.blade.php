<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','myForum')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="container">
        @yield('content')
        <script src="{{ asset('js/bootstrap.js') }}">
        <script src="{{ asset('js/app.js') }}">
    </body>
</html>
