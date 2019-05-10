@extends('baseMarmoleria')
@section('Contenido')
<br>
<br>
<br>
<div class="container">
<table class="table">
	<thead>
		<tr>
			<th> Estado </th>
			<th> Actualizar </th>
			<th> Eliminar </th>
		</tr>
	</thead>
	<tbody>
		@foreach($estados as $estado)
		<tr>
			<td>{{$estado->estado}}</td>
			<td><button class="btn btn-warning"> <a href="/actualizarEstados/{{ $estado->id }}"> Actualizar </button></a></td>
			<td><button class="btn btn-danger"> <a href="/actualizarEstados/{{ $estado->id }}"> Eliminar </button></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection