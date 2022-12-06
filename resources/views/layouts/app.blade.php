<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar sticky-top navbar-expand-lg bg-light opacity-75    ">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/inicio_sesion') }}">
                    <img src="{!! asset('img/logo3.png') !!}" alt="Logo" width="30" height="24">
                </a>          
                <a class="navbar-brand" href="{{ url('/index') }}">Página principal</a>
                <a class="navbar-brand" href="{{ url('/productos') }}">Productos</a>
                <a class="navbar-brand" href="{{ url('/usuarios') }}">Usuarios</a>
                <a class="navbar-brand" href="{{ url('/administradores') }}">Administradores</a>
                <a class="navbar-brand" href="{{ url('/detalle_de_ventas') }}">Detalle de ventas</a>
                <a class="navbar-brand" href="{{ url('/ventas') }}">Ventas</a>
                <a class="navbar-brand" href="{{ url('/referencias') }}">Referencias</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                </ul>
            </div>
            </div>
            
        </nav>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <style>
        th{
            vertical-align: middle;
        }
        td{
            vertical-align: middle;
        }
        h1{
            color: black;
            font-weight: bold;
            text-align: center;
        }
        th{
            color:black;
            text-align: center;
        }
        td{
            color: black;
        }
        body{
            background-image: url(img/fondo.jpeg);
        }
      </style>
</body>
</html>
