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
			<a class="{{ activeMenu('/') }}" href="<?php echo route('home')?>">Inicio</a>
			<!-- <a class="{{ request()->is('saludos/ricky') ? 'active' : ''}}" href="<?php echo route('saludos', 'ricky')?>">Saludo</a> -->
			<a class="{{ activeMenu('saludos/*') }}" href="<?php echo route('saludos', 'ricky')?>">Saludo</a>
			<a class="{{ activeMenu('contactanos') }}" href="<?php echo route('contactos')?>">Contacto</a>
		</nav>
	</header>
	@yield('contenido')
	<footer>Copyright &copy; {{ date('Y') }}</footer>
</body>
</html>