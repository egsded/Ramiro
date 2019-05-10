@extends('baseMarmoleria')
@section('Contenido')

<br>
<br>
<div style="background-color: white;border-radius: 20px 20px"; class="container z-depth-5">
	<table class="table" style="text-align: center">
		<thead>
			<tr>
				<th> Localidades </th>
				<th> Estados </th>
			</tr>
		</thead>
		<tbody>
			@foreach($localidades as $localidad)
			<tr>
				<td> {{ $localidad->localidad }} </td>
				<td> {{ $localidad->estado }} </td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection