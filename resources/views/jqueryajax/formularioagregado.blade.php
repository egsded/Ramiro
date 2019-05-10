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
    <style type="text/css">
      .cuadritos{
  position : relative;
  float : left;
  height : 70px;
  width : 5%;
  background-color : #000000;
  margin : 1px;
  font-size : 250%;
  color : white;
}
.cuadritos:nth-of-type(odd){
  background-color : #C6C1C1;
}
    </style>
<body style="background-color: #3339">
<div>
{{csrf_field()}}
<div align="left" style="margin-left: 10%">
 <br>
 <input type="text" name="texto" id="text" placeholder="escribe algo">
  <button name="btnpt" id="btnpt" class="btn btn-secondary" style="height: 45px;width: 140px; background-color: #566573;margin-bottom: 6px">Enviar peticion</button>

  <ul id="ListaAlumnos"></ul>
</div>
</div>
@yield('contenido')
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="/js/bootstrap.js"></script>
    </body>
    <script type="text/javascript">
      $(document).ready(function(){
      $('#btnpt').click(function(pifi){
        pifi.preventDefault();
      var element= $("#text").val();
      var token= $("input[name=_token]").val();
      $.ajax({
          url:'/otracoleccion',
          data:{element: element,_token:token},
          type:"POST",
          dataType :"json",
          success: function(response){
              $.each(response, function($i, $v){
                $("#ListaAlumnos").append("<div class='cuadritos' style='text-align:center'>"+$v+"</div>");
              });
            }
    });
      $(".cuadro:nth-of-type(odd)").css('background-color', '#888686');
   });
    });
    </script>
</html>