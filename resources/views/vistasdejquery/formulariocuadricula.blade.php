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
.renglon{
  width: 100%;
  height: 100%;
  margin: auto;
  max-width: 45%;
}
  .cuadro{
    position: relative;
    float: left;
  height: 90px;
  width: 90px;
  background-color: #000000;
  margin: 10px;
}
</style>
<body style="background-color: #3339">
<br>
<!--<form method="get" action="{{url("/functiondelacuadricula")}}">-->
<!--  @section('javascript')-->
  <div align="center">
    <div class="container">
      <button id="limpiar" role="button" class="btn btn-light" name="limpiar">Limpiar</button>
      <a id="btnmargen" role="button" class="btn btn-light" name="btnmargen">Margen</a>
      <a id="btncruz" role="button" class="btn btn-light" name="btncruz">Cruz</a>
      <a id="btnmedio" role="button" class="btn btn-light" name="btnmedio">Medio Naci</a>
      <a id="btnxxx" role="button" class="btn btn-light" name="btnxxx">XXX</a>
      <a id="btnesquinas" role="button" class="btn btn-light" name="btnesquinas">Esquinas</a>
      <a id="btnzz" role="button" class="btn btn-light" name="btnzz">Zzzzzzz</a>
      <a id="btnxenmargen" role="button" class="btn btn-light" name="btnxenmargen">X en margen</a>
      <a id="btncentro" role="button" class="btn btn-light" name="btncentro">Centro</a>
      <a id="btntablero" role="button" class="btn btn-light" name="btntablero">Tablero</a>
    </div>
  </div>
  <div class="renglon">
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
  </div>
    <div class="renglon">
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
  </div>
    <div class="renglon">
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
  </div>
    <div class="renglon">
    <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
  </div>
    <div class="renglon">
    <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
      <div align="center" class="cuadro"></div>
  </div>
<!--  @endsection
  @section('javascript')

  @endsection-->
</form>
    @yield('contenido')
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.js"></script>
<!--  @yield('javascript')-->
</body>
  <script type="text/javascript">
//    $(document).ready(function(){
      $("#btnmargen").click(function(){
        $(".renglon:last .cuadro, .renglon:first .cuadro, .renglon .cuadro:first-child, .renglon .cuadro:last-child").css('background-color', '#ffff');
      });
      $("#limpiar").click(function(){
        $(".cuadro").css('background-color', '#000000');
      });
      $("#btncruz").click(function(){
        $(".renglon:nth(2) .cuadro, .cuadro:nth-child(3)").css('background-color', '#ffff');
      });
      $("#btnzz").click(function(){
        $(".renglon:first .cuadro, .renglon:last .cuadro, .cuadro:nth-child(2):eq(3), .cuadro:nth-child(3):eq(2), .cuadro:nth-child(4):eq(1)").css('background-color', '#ffff');
      });
      $("#btnmedio").click(function(){
        $(".renglon:nth(2) .cuadro, .cuadro:nth-child(1):eq(0), .cuadro:nth-child(1):eq(1), .cuadro:nth-child(5):eq(3), .cuadro:nth-child(5):eq(4)").css('background-color', '#ffff');
      });
      $("#btnesquinas").click(function(){
        $(".renglon:last .cuadro:eq(0), .renglon:first .cuadro:eq(0), .renglon:last .cuadro:eq(4), .renglon:first .cuadro:eq(4)").css('background-color', '#ffff');
      });
      $("#btncentro").click(function(){
        $(".renglon:nth(2) .cuadro:nth-child(3)").css('background-color', '#ffff');
      });
      $("#btnxxx").click(function(){
        $(".renglon:last .cuadro:eq(0), .renglon:first .cuadro:eq(0), .renglon:last .cuadro:eq(4), .renglon:first .cuadro:eq(4), .cuadro:nth-child(2):eq(1), .cuadro:nth-last-child(2):eq(1), .cuadro:nth-child(2):eq(3), .cuadro:nth-last-child(2):eq(3), .renglon:nth(2) .cuadro:nth-child(3)").css('background-color', '#ffff');
      });
      $("#btnxenmargen").click(function(){
        $(".renglon:last .cuadro:eq(0), .renglon:first .cuadro:eq(0), .renglon:last .cuadro:eq(4), .renglon:first .cuadro:eq(4), .cuadro:nth-child(2):eq(1), .cuadro:nth-last-child(2):eq(1), .cuadro:nth-child(2):eq(3), .cuadro:nth-last-child(2):eq(3), .renglon:nth(2) .cuadro:nth-child(3), .renglon:last .cuadro, .renglon:first .cuadro, .renglon .cuadro:first-child, .renglon .cuadro:last-child").css('background-color', '#ffff');
      });
      $("#btntablero").click(function(){
        $(".renglon:nth-of-type(odd) .cuadro:nth-of-type(odd), .renglon:nth-of-type(even) .cuadro:nth-of-type(even)").css('background-color', '#ffff');
      });
//    });
  </script>
</html>
</style>
<!-- 1-. hacer 25 cuadros centrados
2-. colorear todos los cuadros del margen
3-. hacer una cruz
4-. medio símbolo nazi
5-. una X
6-. las 4 esquinas
7-. en Z
8-. X con el margen
9-. el de enmedio
10-. uno si y uno no
-html
-end
-var
-not
-lent
-filter
-find
-echo
-addClass
-removeClass
-toggleClass
-hasClass
-Width
-height
-position
-attr
-next
-parent
-closest
-children
-siblings-->