@extends('layout')

@section('contenido')
<h1>Contactos</h1>
@if( session()->has('info'))
	<h3> {{ session('info') }} </h3>
@else 
<form action="contacto" method="post">
<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
{!! csrf_field() !!}
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
@endif

@stop