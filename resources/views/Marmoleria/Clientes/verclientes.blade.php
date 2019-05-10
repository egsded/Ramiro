@extends('baseMarmoleria')
@section('Contenido')

<br>
<br>
<div style="background-color: white;border-radius: 20px 20px; class="container z-depth-5">
	<table class="table" style="text-align: center">
		<thead>
			<tr>
				<th> Cliente </th>
				<th> Correo </th>
				<th> Teléfono </th>
				<th> Localidad </th>
			</tr>
		</thead>
		<tbody>
			@foreach($clientes as $cliente)
			<tr>
				<td> {{ $cliente->nombre }} </td>
				<td> {{ $cliente->correo }} </td>
				<td> {{ $cliente->telefono }} </td>
				<td> {{ $cliente->localidad }} </td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection