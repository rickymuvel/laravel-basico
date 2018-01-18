@extends('layout')
	@section('contenido')
	<h1>Editar mensaje</h1>

	<form action="{{ route('mensajes.update', $message->id) }}" method="post">
	{!! method_field('PUT') !!}
	{!! csrf_field() !!}
		<div>
			<label for="nombre">
				Nombre
				<input type="text" name="nombre" value="{{ $message->nombre }}">
				{!! $errors->first('nombre', '<span class=error>:message</span>') !!}
			</label>
		</div>
		<div>
			<label for="email">
				Email
				<input type="text" name="email" value="{{ $message->email }}">
				{!! $errors->first('email', '<span class=error>:message</span>') !!}
			</label>
		</div>
		<div>
			<label for="email">
				Mensaje
				<textarea name="mensaje" cols="30" rows="10">{{ $message->mensaje }}</textarea>
				{!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
			</label>
		</div>
		<div>
			<input type="submit" value="Enviar">
		</div>

	</form>
@stop