<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	@yield('cssextra')
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css"></head>
	<body style="background-color: #249C9C">
	<br>
	<br>
	<div>
		<div class="container" style="background-color: gray; max-width: 80%">
			<br>
			<form action="{{url('/mitologia/registrar/834173')}}" enctype="multipart/form-data" method="get">
  				<div class="form-group">
    				<label for="nombre">Nombre</label>
    				<input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="nombre">
  				</div>
  				<div class="form-group">
    				<label for="historia">Historia</label>
    				<textarea class="form-control" id="historia" name="historia" placeholder="historia" rows="5"></textarea>
  				</div>
  				<input type="file" name="imagen">
  				<div class="form-group">
    				<label for="tamaño">Tamaño</label>
    				<input type="text" class="form-control" id="tamaño" name="tamaño" aria-describedby="emailHelp" placeholder="tamaño">
  				</div>
  				<div class="form-group">
        			<label for="inputID"> Región </label>
          			<select name="idregion"id="idregion" class="form-control">
             			<option value=""> == Seleccione una Región == </option>
            			@foreach($regiones as $reg)
                			<option value="{{$reg->id}}">{{$reg->region}}</option>
                		@endforeach
          			</select>
        		</div>
        		<div class="form-group">
        			<label for="inputID"> Categoría </label>
          			<select name="categoria"id="categoria" class="form-control">
             			<option value=""> == Seleccione una Categoría == </option>
            			@foreach($categoria as $cat)
                			<option value="{{$cat->id}}">{{$cat->categoria}}</option>
                		@endforeach
          			</select>
        		</div>
        		<div class="form-group">
        			<label for="inputID"> Peligrosidad </label>
          			<select name="peligro"id="peligro" class="form-control">
             			<option value=""> == Seleccione un nivel de peligro == </option>
            			@foreach($peligros as $pel)
                			<option value="{{$pel->id}}">{{$pel->nivel}}</option>
                		@endforeach
          			</select>
        		</div>
        		<div class="form-group">
        			<label for="inputID"> Elementos </label>
          			<select name="elemento"id="elemento" class="form-control">
             			<option value=""> == Seleccione un Elemento == </option>
            			@foreach($elementos as $ele)
                			<option value="{{$ele->id}}">{{$ele->elemento}}</option>
                		@endforeach
          			</select>
        		</div>
  				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		<br>
		</div>
	</div>
</body>
</html>