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
    <form method="POST" action="{{url("/pifi/regseleccion")}}">
      {{csrf_field()}}
      <div class="form-group">
          <label for="nombreinput">Portador:</label>
          <select name="idportador" id="inputID" class="form-control">
                @foreach($portador as $portador)
                <option value="{{$portador->id}}">{{$portador->nombre}}</option>
                @endforeach
              </select>
        </div>
        <div class="form-group">
          <label for="nombreinput">Bici:</label>
          <select name="idbici" id="inputID" class="form-control">
                @foreach($bici as $bi)
                <option value="{{$bi->id}}">{{$bi->marca}}-{{$bi->modelo}}</option>
                @endforeach
              </select>
        </div>
        <div class="form-group">
          <label for="nombreinput">Hora:</label>
          <input name="hora" type="text" class="form-control" id="usuario" placeholder="apache">
        </div>
          <button type="submit" class="btn btn-success float-right">Enviar</button>
        </div>
      </form>
      <a class="btn btn-primary my-2 my-sm-0" type="submit" href="/menuportadorcista">menu</a>
    </div>
  </div>
</body>
</html>