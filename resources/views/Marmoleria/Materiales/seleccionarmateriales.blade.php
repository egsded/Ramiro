@extends('baseMarmoleria3')
@section('Contenido')
<br>
<br>
<br>
<div style="background-color: white;border-radius: 20px 20px;padding-left: 40px" class="container z-depth-5">
<table class="table">
	<thead>
		<tr>
			<th>Material</th>
			<th>Color</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
		</tr>
	</thead>
	<tbody>
		@foreach($materiales as $material)
		<tr>
			<td>{{$material->material}}</td>
			<td>{{$material->color}}</td>
			<td><a class="waves-effect waves-light btn-small" href="/actualizarMateriales/{{ $material->id }}"> Actualizar </button></a></td>
			<td><a class="waves-effect waves-light btn-small" href="/eliminarMaterial/{{ $material->id }}"> Eliminar </button></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection