@extends('baseMarmoleria3')
@section('Contenido')
<br>
<br>
<br>
<div style="background-color: white;border-radius: 20px 20px"; class="container z-depth-5">
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
			<td><a class="waves-effect waves-light btn-small" href="/actualizarClientes/{{ $cliente->id }}"> Actualizar </button></a></td>
			<td><a class="waves-effect waves-light btn-small" href="/eliminarClientes/{{ $cliente->id }}"> Eliminar </button></a></td>
			<td><a class="waves-effect waves-light btn-small" href="/saldocliente/{{ $cliente->id }}"> Saldo </button></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection