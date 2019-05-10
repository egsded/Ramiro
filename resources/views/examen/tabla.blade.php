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
      <th> Nombre </th>
      <th> Edad </th>
      <th> Sexo </th>
    </tr>
  </thead>
  <tbody>
    @foreach($persona as $P)
      <tr>
        <td> {{ $P->nombre }} </td>
        <td> {{ $P->edad }} </td>
        <td> {{ $P->sexo }} </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
      <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="/menubicis">ordenar</a>
    </div>
  </div>
</body>
</html>