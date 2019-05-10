<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @yield('cssextra')
        <title>Colecciones</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="/css/bootstrap.css" rel="stylesheet">
        <script src="/js/bootstrap.js"></script>
    </head>
<body style="background-color: #3339">
  {{csr_field()}}
  <form method="POST" enctype="multipart/form-data" action="/">
    <input type="file" name="file">
    <button type="submit">subir</button>
    <div class="row">
      <ul>
      @foreach($imgs as $img)
      <li>
        <img src="data:image/jpeg;base64,{{base64_encode($img['$img'])}}">
      </li>
      @endforeach
    </ul>
    </div>
  </form>
@yield('contenido')
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="/js/bootstrap.js"></script>
    </body>
    <script type="text/javascript">
    </script>
</html>