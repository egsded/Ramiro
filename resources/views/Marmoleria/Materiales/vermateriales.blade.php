@extends('baseMarmoleria')
@section('Contenido')

<div style="background-color: white;border-radius: 20px 20px;padding-left: 40px" class="container z-depth-5">
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