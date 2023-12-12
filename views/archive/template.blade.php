<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href = "{{ asset('css/template.css') }}">
        <title>template</title>
    </head>
    <header>
        @include('header')
    </header>
    <body>
        
        <div class = 'content'>
            @yield('content')
        </div>
        
    </body>
    <footer>
         @include('footer')
    </footer>
</html>
