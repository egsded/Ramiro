@extends('baseMarmoleria')
@section('Contenido')

<br>
<br>
<div style="background-color: white;border-radius: 20px 20px"; class="container z-depth-5">
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