@extends('baseMarmoleria')
@section('Contenido')
<br>
<br>
<br>
<div style="background-color: white;border-radius: 20px 20px;" class="container z-depth-5">
<table class="table">
	<thead>
		<tr>
			<th>Categoria</th>
		</tr>
	</thead>
	<tbody>
		@foreach($categorias as $cat)
		<tr>
			<td>{{$cat->categoria}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection