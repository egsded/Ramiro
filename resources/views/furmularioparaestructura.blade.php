<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	@yield('cssextra')
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
</head>
<body>
	<div class="card-body">
        <form method="POST" action="{{url("/cliente")}}">
          {{csrf_field()}}
          <div class="form-group">
          <label for="nombreinput">Producto:</label>
          <input name="producto" type="text" class="form-control" id="usuario" placeholder="amor">
        </div>
        <div class="form-group">
          <label for="nombreinput">Precio:</label>
          <input name="precio" type="text" class="form-control" id="contraseña" placeholder="1999999">
        </div>
        <div class="form-group">
          <label for="nombreinput">Cantidad:</label>
          <input name="cantidad" type="text" class="form-control" id="contraseña" placeholder="4">
        </div>
        @if(Session::has("Mensaje"))
        <div class="alert alert-info animated bounceInUp" role="alert">
          <strong>{{Session::get("Mensaje")}}</strong>
        </div>
        @endif
        <button type="submit" class="btn btn-outline-primary float-right">Enviar</button>
      </div>
</body>
</html>