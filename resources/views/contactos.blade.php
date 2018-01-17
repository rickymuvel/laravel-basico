@extends('layout')

@section('contenido')
<h1>Contactos</h1>
<form action="contacto" method="post">
	<div>
		<label for="nombre">
			Nombre
			<input type="text" name="nombre">
		</label>
	</div>
	<div>
		<label for="email">
			Email
			<input type="email" name="email">
		</label>
	</div>
	<div>
		<label for="email">
			Mensaje
			<textarea name="mensaje" cols="30" rows="10"></textarea>
		</label>
	</div>
	<div>
		<input type="submit" value="Enviar">
	</div>

</form>
@stop