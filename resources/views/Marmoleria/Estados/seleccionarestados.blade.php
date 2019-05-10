@extends('baseMarmoleria3')
@section('Contenido')
<br>
<br>
<br>
<div style="background-color: white;border-radius: 20px 20px"; class="container z-depth-5">
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
			<td><a class="waves-effect waves-light btn-small" href="/actualizarEstados/{{ $estado->id }}"> Actualizar </button></a></td>
			<td><a class="waves-effect waves-light btn-small" href="/eliminarEstados/{{ $estado->id }}"> Eliminar </button></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection