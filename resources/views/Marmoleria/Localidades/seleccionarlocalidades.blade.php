@extends('baseMarmoleria3')
@section('Contenido')
<br>
<br>
<br>
<div style="background-color: white;border-radius: 20px 20px"; class="container z-depth-5">
<table class="table">
	<thead>
		<tr>
			<th> Localidad </th>
			<th> Monto </th>
			<th> Estado </th>
			<th> Actualizar </th>
			<th> Eliminar </th>
		</tr>
	</thead>
	<tbody>
		@foreach($localidades as $localidad)
		<tr>
			<td>{{$localidad->localidad}}</td>
			<td>{{$localidad->monto}}</td>
			<td>{{$localidad->estado}}</td>
			<td><a class="waves-effect waves-light btn-small" href="/actualizarLocalidades/{{ $localidad->id }}"> Actualizar </button></a></td>
			<td><a class="waves-effect waves-light btn-small" href="/eliminarLocalidades/{{ $localidad->id }}"> Eliminar </button></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection