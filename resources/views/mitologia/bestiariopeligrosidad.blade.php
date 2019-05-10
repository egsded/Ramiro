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
	<div align="center">
		<div class="container" style="background-color: gray; max-width: 40%">
			<br>
			<form class="form-inline" style="margin-left: 8%" action="{{url('/mitologia/registrar/275353')}}" enctype="multipart/form-data" method="get">
  			<div class="form-group mb-2" style="font-size: 25px; color: #096A04;">
    			<label><b>Peligrosidad</b></label>
  			</div>
  			<div class="form-group mx-sm-3 mb-2">
    			<input type="text" class="form-control" id="peligro" name="peligro" placeholder="Peligro">
  			</div>
  			<button type="submit" class="btn btn-primary mb-2">Aceptar</button>
		</form>
		<br>
		</div>
		<br>
		<br>
		<table class="table" style="background-color: white; max-width: 60%; text-align: center;">
			<tr>
				<th>id</th>
				<th>elemento</th>
			</tr>
			@foreach($peligro as $pel)
			<tr>
				<td>{{$pel->id}}</td>
				<td>{{$pel->nivel}}</td>
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>