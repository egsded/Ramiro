@extends('baseMarmoleria')
@section('Contenido')
<br>
<br>
<br>
<div class="container">
<table class="table">
	<thead>
		<tr>
			<th>Cliente</th>
			<th>Monto</th>
			<th>Cantidad</th>
			<th>Monto Extra</th>
			<th>Total</th>
			<th>Oración</th>
			<th>Localidad</th>
			<th>Estado</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
		</tr>
	</thead>
	<tbody>
		@foreach($ventas as $venta)
		<tr>
			<td>{{$venta->nombre}}</td>
			<td>{{$venta->monto}}</td>
			<td>{{$venta->cantidad}}</td>
			<td>{{$venta->monto_extra}}</td>
			<td>{{$venta->total}}</td>
			<td>{{$venta->oracion}}</td>
			<td>{{$venta->localidad}}</td>
			<td>{{$venta->estado}}</td>
			<td><button class="btn btn-warning"> <a href="/actualizarVentas/{{ $venta->id }}"> Actualizar </button></a></td>
			<td><button class="btn btn-danger"> <a href="/actualizarVentas/{{ $venta->id }}"> Eliminar </button></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection