<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	{{$z=$nu}}
	@for($i=$nu;$i>2;$i=$i-1)
	<p>{{$z=$z*($i-1)}}</p>
	@endfor
</body>
</html>