<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super gestão - @yield('title')</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="{{asset('css/estilo_basico.css')}}">
   
    </head>
    
    @include('site.templates.components.header')

    @yield('contents')

    <body>
</body>
</html>