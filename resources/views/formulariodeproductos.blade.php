<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	@yield('cssextra')
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css"></head>
<body style="background-color: #7777">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url("/formularioproducto")}}">formulario</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{url("/tablas")}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <div class="container" style="background-color: white">
    <div class="card-body">
    <form method="POST" action="{{url("/producto")}}">
      {{csrf_field()}}
      <div class="form-group">
          <label for="nombreinput">Producto:</label>
          <input name="producto" type="text" class="form-control" id="usuario" placeholder="amor">
        </div>
        <div class="form-group">
          <label for="nombreinput">Precio:</label>
          <input name="precio" type="text" class="form-control" id="contraseña" placeholder="$1999999.99">
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
        <div>
          <button type="submit" class="btn btn-outline-primary float-right">Enviar</button>
        </div>
        @extends('baseProductos')

@section('Contenido')
<br>
<br>
</center>
<br>
<br>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th> Nombre Producto </th>
      <th> Categoria </th>
      <th> Cantidad </th>
      <th> Precio </th>
    </tr>
  </thead>
  <tbody>
    @foreach($produ as produ)
      <tr>
        <td> {{ $produ->producto }} </td>
        <td> {{ $produ->cantidad }} </td>
        <td> {{ $produ->precio }} </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
      </form>
    </div>
  </div>
</body>
</html>
<!-- 
  -midleware
  -modelo(insertar, eliminar) relacion(1-1*belongsto*,1-m inversa*belongsto* directa#hasmany# ,m-1*hasone*,m-m*belongstomany*)
  -carbon
  carbon::now;
  -vista(blade, pasar datos)
  -sesion
  -ruteador-->