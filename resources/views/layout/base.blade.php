<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name') }} :: @yield('titulo')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>

        <div class="logo">
            <img src="{{ asset('img/lupa.png')}}" alt="digital">
        </div>

        <div class="container">
            @yield('conteudo')
        </div>
       
        <footer>
            <p>Digital 2019</p>
        </footer>
    </body>
</html>