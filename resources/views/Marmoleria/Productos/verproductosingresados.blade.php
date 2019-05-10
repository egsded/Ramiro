@extends('baseMarmoleria3')
@section('Contenido')
<br>
<br>
<br>
<div style="background-color: white;border-radius: 20px 20px"; class="container z-depth-5">
<table class="table">
	<thead>
		<tr>
			<th>Producto</th>
			<th>Fecha de ingreso</th>
		</tr>
	</thead>
	<tbody>
		@foreach($productosin as $producto)
		<tr>
			<td>{{$producto->producto}}</td>
			<td>{{$producto->fecha_ingreso}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection