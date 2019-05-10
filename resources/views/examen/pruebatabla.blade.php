<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	@yield('cssextra')
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css"></head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<body style="background-color: gray">
  <br>
  <br>
  <table class="table" style="background: white">
    <tr>
      <th>id</th>
      <th>nombre</th>
      <th>edad</th>
      <th>sexo</th>
    </tr>
    @foreach($tabla as $ta)
    <tr>
      <td>{{$ta->id}}</td>
      <td>{{$ta->nombre}}</td>
      <td>{{$ta->edad}}</td>
      <td>{{$ta->sexo}}</td>
    </tr>
    @endforeach
  </table>
  <a class="btn btn-primary" href="/pifi/ordenar" role="button">Ordenar</a>
  <a class="btn btn-primary" href="/pifi/formulariodeprueba" role="button">Regresar</a>
</body>
</html>