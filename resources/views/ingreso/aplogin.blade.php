<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>INIA</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">

    @yield('style')

    <style>
        .logout{
            font-family: "Times New Roman", Times, serif;
        }
        #body{
            background-image: url("{{ asset('img/fondo_index_2.png')}}");            
            background-size: cover;            
        }                    
       
    </style>


</head>
<body id="body">
    <div id="app">
        
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Bienvenido: {{ Auth::user()->name }}</a>
              </div>
              <ul class="nav navbar-nav">
                <li class="@if (Request::is('ingreso')) active @endif"><a href=" {{ route('ingreso.index') }} "><i class="icon-dashboard"></i> Inicio</a></li>
                <li class="@if (Request::is('ingreso/entrega')) active @endif"><a href="{{ route('ingreso.entrega.index') }}"><i class="icon-truck"></i> Entrega de Equipos</a></li>
                <li class="@if (Request::is('ingreso/devolucion')) active @endif"><a href="{{ route('ingreso.devolucion.index') }}"><i class="icon-refresh"></i> Devolución de Equipos</a></li>
                <li><a href="#"><i class="icon-user"></i> Usuarios</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li>                    
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <span class="glyphicon glyphicon-log-in"></span> {{ __('Salir') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
              </ul>
            </div>
          </nav>

        <div class="contenido">
            <div class="contenido-body">
                @yield('adminlogin')
            </div>
        </div>
    </div>

    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')}}" type="text/javascript"></script>

    <!--Begin::style-->
        @yield('script')
    <!--End::style-->
</body>
</html>
