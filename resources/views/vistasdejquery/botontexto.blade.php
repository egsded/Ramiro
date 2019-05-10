<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  @yield('cssextra')
  <title></title>
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
</style>
<body style="background-color: #3339">
  <div class="renglon"><br>Ingresar texto
    <input id="texto" type="text" name="">
    <button id="igual" role="button" class="btn btn-light, cuadro" name="igual">Aceptar</button>
    <br>
    <!-- <div class="cola"></div> -->
  </div>
  <div class="cola"></div>
  @yield('contenido')
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.js"></script>
</body>
  <script type="text/javascript">
    $('.renglon').css({'width' : '200%', 'height' : '200%', 'margin' : 'auto', 'max-width' : '50%', 'background-color' : 'black', 'color' : 'white', 'text-align' : 'center'});
    $('.cuadro').click(function(){
      var elemnt = $("#texto").val().split("");
              $.each(elemnt, function($i, $v){
                $(".cola").append("<div class='cuadritos' style='text-align:center'>"+$v+"</div>");
              });
    });
  </script>
</html>