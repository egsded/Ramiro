@extends('baseMarmoleria')
@section('Contenido')
<br>
<br>
<br>
<div class="container">
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
			<td><button class="btn btn-warning"> <a href="/actualizarLocalidades/{{ $localidad->id }}"> Actualizar </button></a></td>
			<td><button class="btn btn-danger"> <a href="/actualizarLocalidades/{{ $localidad->id }}"> Eliminar </button></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection