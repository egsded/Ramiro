@extends('baseMarmoleria')
@section('Contenido')
<br>
<br>
<br>
<div class="container">
<table class="table">
	<thead>
		<tr>
			<th>Cliente</th>
			<th>Correo</th>
			<th>Teléfono</th>
			<th>Localidad</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
		</tr>
	</thead>
	<tbody>
		@foreach($clientes as $cliente)
		<tr>
			<td>{{$cliente->nombre}}</td>
			<td>{{$cliente->correo}}</td>
			<td>{{$cliente->telefono}}</td>
			<td>{{$cliente->localidad}}</td>
			<td><button class="btn btn-warning"> <a href="/actualizarClientes/{{ $cliente->id }}"> Actualizar </button></a></td>
			<td><button class="btn btn-danger"> <a href="/actualizarClientes/{{ $cliente->id }}"> Eliminar </button></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection