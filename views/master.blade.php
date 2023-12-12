<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Investment Web</title>
        <link rel="stylesheet" href = "{{ asset('css/template.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

        @yield('stylesheets')
        
    </head>
    <body>
       @include('header')
       @yield('content')
       @include('footer')
    </body>
</html>
