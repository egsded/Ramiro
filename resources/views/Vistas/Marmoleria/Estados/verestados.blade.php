@extends('baseMarmoleria')
@section('Contenido')

<br>
<br>
<div class="container">
	<table class="table" style="text-align: center">
		<thead>
			<tr>
				<th> Estados Registrados </th>
			</tr>
		</thead>
		<tbody>
			@foreach($estados as $estado)
			<tr>
				<td> {{$estado->estado}} </td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection