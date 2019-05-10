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
		</tr>
	</thead>
	<tbody>
		@foreach($productos as $producto)
		<tr>
			<td>{{$producto->producto}}</td>
			<td>{{$producto->descripcion}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection