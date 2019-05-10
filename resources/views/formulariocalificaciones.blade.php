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
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<br>
  <div class="container">
    <div class="card">
      <div class="card-header">
        Regístrame esta
      </div>
      <div class="card-body">
        <form method="POST" action="{{url("/pstalumnos")}}">
          {{csrf_field()}}
        <div class="form-group">
          <label for="id">Alumno:</label>
          <input name="nombre" type="text" class="form-control" id="id" placeholder="pifi">
        </div>
        <div class="form-group">
          <label for="C1">Calificación Parcial 1:</label>
          <input name="c1" type="text" class="form-control" id="Cliente" placeholder="00">
        </div>
        <div class="form-group">
          <label for="c2">Calificación Parcial 2:</label>
          <input name="c2" type="text" class="form-control" id="apellidop" placeholder="00">
        </div>
        <div class="form-group">
          <label for="c3">Calificación Parcial 3:</label>
          <input name="c3" type="text" class="form-control" id="apellidom" placeholder="00">
        </div>
        <button type="submit" class="btn btn-outline-primary float-right">Enviar</button>
      </div>
    </div>
     <!--@section('menu')
        contenido del menu
      @show
  </div>-->
	@yield('contenido')
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="/js/bootstrap.js"></script>
	@yield('javascript')
</body>