<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html');
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msapplication-TileImage" content="http://www.effie-peru.com/wp-content/uploads/2020/01/icon.png">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap">
    <link rel="stylesheet" href="{{ asset('css/effie-reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/effie-style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.loadingModal.min.css') }}">
    <link rel="icon" href="http://www.effie-peru.com/wp-content/uploads/2020/01/icon.png" sizes="32x32">
    <link rel="icon" href="http://www.effie-peru.com/wp-content/uploads/2020/01/icon.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="http://www.effie-peru.com/wp-content/uploads/2020/01/icon.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="{{ asset('js/jquery.loadingModal.min.js') }}"></script>
</head>
<body>
    <div id="app">
        <header class="header-principal">
            <div class="container">
                <div style="float:left">
                    <div class="columna columna-1">
                        <a href="{{ url('/') }}"><img src="{{ asset('images/logo-25.png') }}" width="300"></a>
                    </div>
                </div>
                @if (Route::has('login'))
                <div style="float:right">
                    @auth
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            class="btn-effie-inv" style="margin-top:20px">{{ __('Cerrar sesión') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn-effie-inv" style="margin-top:20px">{{ __('Iniciar sesión') }}</a>
                    @endauth
                </div>
                @endif
            </div>	
        </header>
        <main class="py-4">
            @yield('content')
        </main>
        <div class="space2"></div>
        <div class="pre-footer">
            <div class="container">
                <div class="fila">
                    <div class="columna columna-2">
                        <center><img src="{{ asset('images/letra2.png') }}"></center>	
                    </div>
                    <div class="columna columna-2">
                        <center><img src="{{ asset('images/logo-25-blanco.png') }}"></center>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p>{{ __('© 2020 EFFIE') }}<sup>{{ __('®') }}</sup>{{ __(' Awards Perú todos los derechos reservados | Desarrollado por ') }}<a href="//www.preciso.pe/">{{ __('Preciso - Agencia de contenidos') }}</a></p>
        </footer>
    </div>
    @yield('script')
</body>
</html>
