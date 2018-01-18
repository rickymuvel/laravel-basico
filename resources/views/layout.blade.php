<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi sitio</title>
	<style>
		.active {
			color:green;
		}
		.error {
			color: red;
			font-size: 12px;
		}
	</style>
</head>
<body>
	<header>
		<!-- <h1>{{ request()->url() }}</h1> -->
		<h1>{{ request()->is('/') ? 'Estás en el home' : 'No estás en el home' }}</h1>
		<?php
		function activeMenu($url){
			return request()->is($url) ? 'active' : '';
		}
		?>
		<nav>
			<a class="{{ activeMenu('/') }}" href="{{route('home')}}">Inicio</a>
			<!-- <a class="{{ request()->is('saludos/ricky') ? 'active' : ''}}" href="{{route('saludos', 'ricky')}}">Saludo</a> -->
			<a class="{{ activeMenu('saludos/*') }}" href="{{route('saludos', 'ricky')}}">Saludo</a>
			<a class="{{ activeMenu('mensajes/create') }}" href="{{route('mensajes.create')}}">Contacto</a>
			<a class="{{ activeMenu('mensajes') }}" href="{{route('mensajes.index')}}">Mensajes</a>
		</nav>
	</header>
	@yield('contenido')
	<footer>Copyright &copy; {{ date('Y') }}</footer>
</body>
</html>