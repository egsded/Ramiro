<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
@extends('baseMarmoleria3')
@section('Contenido')
<br>
<br>
<br>
<!-- <div class="container">
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
			<td><a class="waves-effect waves-light btn-small" href="/actualizarCategoria/{{ $cat->id }}"> Actualizar </a></td>
			<td><a class="waves-effect waves-light btn-small" href="/eliminarCategoria/{{ $cat->id }}"> Eliminar </a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div> -->
<div class="container" style="height: 50%; width: 50%; margin-left: 30%">
	<div class="card-deck">
		@foreach($categorias as $categorias)
			<a href="/seleccionarProductos/{{$categorias->id}}" class="btn waves-effect waves-light btn tooltipped" data-position="bottom" data-tooltip="{{$categorias->categoria}}" style="margin-left: 20px; margin-top: 40px; height: 100px; width: 250px; text-align: center; background-color: #C9C7C6; font-size: 180%;"><img src="{{$categorias->icono}}" style="margin-top: 10%"></a>
		@endforeach
	</div>
</div>
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
</script>
@endsection