@extends('baseMarmoleria')
@section('Contenido')

<br>
<br>
<div style="background-color: white;border-radius: 20px 20px; class="container">
	<table class="table" style="text-align: center">
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
		</tr>
		@endforeach
	</tbody>
	</table>
</div>

@endsection