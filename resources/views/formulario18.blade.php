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
  <div class="container">
    <div class="card">
      <div class="card-header">
        Clientes con 18 años de edad con bicicletas
      </div>
      <div class="card-body">
        <form method="POST" action="{{url("/regcarropersona")}}">
          {{csrf_field()}}
          <div class="form-group">
            <div class="col.sm-8">
              <select name="idportador" id="inputID" class="form-control">
                @foreach($users as $portador)
                <option value="{{$portador->id}}">{{$portador->nombre}},</option>
                @endforeach
              </select>
            </div>
          </div>
        </form><a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="/menubicis">menu</a>
      </div>
    </div>
  </div>
	@yield('contenido')
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="/js/bootstrap.js"></script>
	@yield('javascript')
</body>
</html>