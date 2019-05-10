@extends('baseMarmoleria')
@section('Contenido')

<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th> Material </th>
				<th> Color </th>
			</tr>
		</thead>
		<tbody>
			@foreach($materiales as $material)
			<tr>
				<td> {{$material->material}} </td>
				<td> {{$material->color}} </td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection