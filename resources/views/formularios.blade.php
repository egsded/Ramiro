<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	@yield('cssextra')
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
</head>
<body style="background-color: #7777">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Acciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/altacontacto/alt">Alterar</a>
          <a class="dropdown-item" href="/altacontacto/eli">Eliminar</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	<h1> primer pagina usando plantillas</h1>
  <div class="container">
    <div class="card">
      <div class="card-header">
        Regístrame esta
      </div>
      <div class="card-body">
        <form method="get" action="{{url("/altacontacto")}}">
          {{csrf_field()}}
        <div class="form-group">
          <label for="Cliente">Nombre:</label>
          <input name="Cliente" type="text" class="form-control" id="Cliente" placeholder="pifi">
        </div>
        <div class="form-group">
          <label for="apellidop">Apellido Paterno:</label>
          <input name="apellidop" type="text" class="form-control" id="apellidop" placeholder="de la cruz">
        </div>
        <div class="form-group">
          <label for="apellidom">Apellido Materno:</label>
          <input name="apellidom" type="text" class="form-control" id="apellidom" placeholder="de la cruz">
        </div>
        <div class="form-group">
          <label for="Correo">Correo:</label>
          <input name="correo" type="text" class="form-control" id="Correo" placeholder="pifi@gmail.com">
        </div>
        <div class="form-group">
          <label for="facebook">FaceBook:</label>
          <input name="facebook" type="text" class="form-control" id="facebook" placeholder="pifirififififi">
        </div>
        <button type="submit" class="btn btn-outline-primary float-right">Enviar</button>
      </div>
    </div>
     @section('menu')
        contenido del menu
      @show
  </div>
	@yield('contenido')
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="/js/bootstrap.js"></script>
	@yield('javascript')
</body>
</html>