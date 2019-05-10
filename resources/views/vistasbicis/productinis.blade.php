<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	@yield('cssextra')
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css"></head>
<body style="background-color: gray">
  <div class="container" style="background-color: white">
    <div class="card-body">
    <form method="POST" action="{{url("/pifi/regproductos")}}">
      {{csrf_field()}}
        <div class="form-group">
          <label for="nombreinput">Nombre:</label>
          <input name="nombre" type="text" class="form-control" id="usuario" placeholder="apache">
        </div>
        <div class="form-group">
          <label for="nombreinput">Kg:</label>
          <input name="kg" type="text" class="form-control" id="usuario" placeholder="apache">
        </div>
          <button type="submit" class="btn btn-success float-right">Enviar</button>
        </div>
        @if(Session::has("Mensaje"))
      <div class="alert alert-info animated bounceInUp" role="alert">
          <strong>{{Session::get("Mensaje")}}</strong>
        </div>
        @endif
      </form>
      <a class="btn btn-primary my-2 my-sm-0" type="submit" href="pifi/tabladeregpro">menu</a>
    </div>
  </div>
</body>
</html>