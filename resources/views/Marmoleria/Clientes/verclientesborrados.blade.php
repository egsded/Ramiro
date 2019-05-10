@extends('baseMarmoleria3')
@section('Contenido')

<br>
<br>
<div style="background-color: white;border-radius: 20px 20px"; class="container z-depth-5">
	<table class="table" style="text-align: center">
		<thead>
			<tr>
				<th> Cliente </th>
				<th> Usuario </th>
				<th> Fecha de ingreso </th>
			</tr>
		</thead>
		<tbody>
			@foreach($clientesbr as $cliente)
			<tr>
				<td> {{ $cliente->nombre }} </td>
				<td> {{ $cliente->usuario }} </td>
				<td> {{ $cliente->fecha_ingreso }} </td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection