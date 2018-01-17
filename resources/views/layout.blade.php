<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi sitio</title>
</head>
<body>
	<header>
		<nav>
			<a href="<?php echo route('home')?>">Inicio</a>
			<a href="<?php echo route('saludos', 'ricky')?>">Saludo</a>
			<a href="<?php echo route('contactos')?>">Contacto</a>
		</nav>
	</header>
	@yield('contenido')
	<footer>Copyright &copy; {{ date('Y') }}</footer>
</body>
</html>