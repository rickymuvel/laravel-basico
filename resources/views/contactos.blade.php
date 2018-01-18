@extends('layout')

@section('contenido')
<h1>Contactos</h1>
<form action="contacto" method="post">
	<div>
		<label for="nombre">
			Nombre
			<input type="text" name="nombre" value="{{ old('nombre') }}">
			{!! $errors->first('nombre', '<span class=error>:message</span>') !!}
		</label>
	</div>
	<div>
		<label for="email">
			Email
			<input type="text" name="email" value="{{ old('email') }}">
			{!! $errors->first('email', '<span class=error>:message</span>') !!}
		</label>
	</div>
	<div>
		<label for="email">
			Mensaje
			<textarea name="mensaje" cols="30" rows="10">{{ old('mensaje') }}</textarea>
			{!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
		</label>
	</div>
	<div>
		<input type="submit" value="Enviar">
	</div>

</form>
@stop