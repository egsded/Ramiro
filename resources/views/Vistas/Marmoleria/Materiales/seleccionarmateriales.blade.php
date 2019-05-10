@extends('baseMarmoleria')
@section('Contenido')
<br>
<br>
<br>
<div class="container">
<table class="table">
	<thead>
		<tr>
			<th>Material</th>
			<th>Color</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
		</tr>
	</thead>
	<tbody>
		@foreach($materiales as $material)
		<tr>
			<td>{{$material->material}}</td>
			<td>{{$material->color}}</td>
			<td><button class="btn btn-success"> <a href="/actualizarMateriales/{{ $material->id }}"> Actualizar </button></a></td>
			<td><button class="btn btn-warning"> <a href="/eliminarProductos/{{ $material->id }}"> Eliminar </button></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection