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
    <form method="POST" action="{{url("/pifi/regbici")}}">
      {{csrf_field()}}
      <div class="form-group">
          <label for="nombreinput">Marca:</label>
          <input name="marca" type="text" class="form-control" id="usuario" placeholder="apache">
        </div>
        <div class="form-group">
          <label for="nombreinput">Modelo:</label>
          <input name="modelo" type="text" class="form-control" id="contraseña" placeholder="noruego">
        </div>
        <div>
          <button type="submit" class="btn btn-success float-right">Enviar</button>
        </div>
      </form>
      <a class="btn btn-primary my-2 my-sm-0" type="submit" href="/menuportadorcista">menu</a>
    </div>
  </div>
</body>
</html>