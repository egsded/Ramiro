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
    <table class="table">
      <tr>
        <th>producto</th>
        <th>kilos</th>
      </tr>
      @foreach($productini as $produ)
      <tr>
        <td>{{$produ->nombre}}</td>
        <td>{{$produ->kg}}</td>
      </tr>
      @endforeach
    </table>
  </div>
</body>
</html>