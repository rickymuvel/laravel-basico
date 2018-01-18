@extends('layout')

@section('contenido')
	<h1>Todos los mensajes</h1>
	
	<table width="100%" border="1">
		<thead>
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Email</td>
				<td>Mensaje</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
			@foreach($messages as $message)
				<tr>
					<td>{{ $message->id }}</td>
					<td>
						<a href="{{ route('mensajes.show', $message->id) }}">{{ $message->nombre }}</a>
					</td>
					<td>{{ $message->email }}</td>
					<td>{{ $message->mensaje }}</td>
					<td>
						<a href="{{ route('mensajes.edit', $message->id) }}">Editar</a>
						<form style="display: inline" action="{{ route('mensajes.destroy', $message->id) }}" method="POST">
							{!! method_field("DELETE") !!}
							{!! csrf_field() !!}
							<input type="submit" value="Eliminar">
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop