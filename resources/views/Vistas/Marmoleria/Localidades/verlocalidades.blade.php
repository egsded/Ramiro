@extends('baseMarmoleria')
@section('Contenido')

<br>
<br>
<div class="container">
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