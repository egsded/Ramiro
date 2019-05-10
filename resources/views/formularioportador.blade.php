<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	@yield('cssextra')
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css"></head>
<body>
  <div class="container" style="background-color: white">
    <div class="card-body">
    <form method="POST" action="{{url("/regportadores")}}">
      {{csrf_field()}}
      <div class="form-group">
          <label for="nombreinput">Nombre:</label>
          <input name="nombre" type="text" class="form-control" id="usuario" placeholder="pifi">
        </div>
        <div class="form-group">
          <label for="nombreinput">Edad:</label>
          <input name="edad" type="text" class="form-control" id="contraseña" placeholder="135">
        </div>
        @if(Session::has("Mensaje"))
        <div class="alert alert-info animated bounceInUp" role="alert">
          <strong>{{Session::get("Mensaje")}}</strong>
        </div>
        @endif
        <div>
          <button type="submit" class="btn btn-outline-primary float-right">Enviar</button>
        </div>
      </form>
      <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="/menubicis">menu</a>
    </div>
  </div>
</body>
</html>