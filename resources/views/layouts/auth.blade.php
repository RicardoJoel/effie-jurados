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
    <meta name="msapplication-TileImage" content="http://www.effie-peru.com/wp-content/uploads/2020/01/icon.png">
    <title>{{ config('app.name', 'Laravel') }} {{ __(' - Inicio de sesión') }}</title>
	<link rel="stylesheet" href="{{ asset('css/effie-reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/effie-style.css') }}">
	<link rel="icon" href="http://www.effie-peru.com/wp-content/uploads/2020/01/icon.png" sizes="32x32">
	<link rel="icon" href="http://www.effie-peru.com/wp-content/uploads/2020/01/icon.png" sizes="192x192">
	<link rel="apple-touch-icon-precomposed" href="http://www.effie-peru.com/wp-content/uploads/2020/01/icon.png">
</head>
<body>
	<div class="body-login">
		<div class="login">
			<div class="box-login">
				<center>
					<a href="{{ url('/') }}"><img src="{{ asset('images/logo-25.png') }}" class="logo"></a>
				</center>
				<p>{{ __('¿No tiene una cuenta? ') }}<a href="{{ url('http://preciso.pe/effie-cert-jurados/index.php#formulario-inscripcion') }}">{{ __('Cree una') }}</a>.</p>
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
		<div class="fondo-login">
			<img src="{{ asset('images/curso-online.jpg') }}" class="img-responsive">
		</div>
    </div>
    <footer>
        <p>{{ __('© 2020 EFFIE') }}<sup>{{ __('®') }}</sup>{{ __(' Awards Perú todos los derechos reservados | Desarrollado por ') }}<a href="//www.preciso.pe/">{{ __('Preciso - Agencia de contenidos') }}</a></p>
    </footer>
</body>
</html>
