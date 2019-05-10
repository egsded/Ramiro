@extends('baseMarmoleria3')
@section('Contenido')
<br>
<br>
<br>
<div style="background-color: white;border-radius: 20px 20px;padding-left: 40px" class="container">
<table class="table">
	<thead>
		<tr>
			<th>Producto</th>
			<th>Descripción</th>
			<th>Precio</th>
		</tr>
	</thead>
	<tbody>
		@foreach($productos as $producto)
		<tr>
			<td>{{$producto->producto}}</td>
			<td>{{$producto->descripcion}}</td>
			<td>{{$producto->presio}}</td>
			<td><a class="waves-effect waves-light btn-small" href="/actualizarProductos/{{$producto->id}}">Actualizar</a></td>
			<td><a class="waves-effect waves-light btn-small" href="/eliminarProductos/{{$producto->id}}">Eliminar</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection