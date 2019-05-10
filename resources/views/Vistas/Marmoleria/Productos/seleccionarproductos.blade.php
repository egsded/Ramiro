@extends('baseMarmoleria')
@section('Contenido')
<br>
<br>
<br>
<div class="container">
<table class="table">
	<thead>
		<tr>
			<th>Producto</th>
			<th>Descripción</th>
			<th>Seleccionar</th>
		</tr>
	</thead>
	<tbody>
		@foreach($productos as $producto)
		<tr>
			<td>{{$producto->producto}}</td>
			<td>{{$producto->descripcion}}</td>
			<td><button class="btn btn-success"> <a href="/actualizarProductos/{{ $producto->id }}"> Actualizar </button></a></td>
			<td><button class="btn btn-warning"> <a href="/eliminarProductos/{{ $producto->id }}"> Eliminar </button></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection