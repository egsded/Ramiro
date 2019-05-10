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
<body style="background-color: #3339">
<br>
<div class="renglon">
    <button id="resultastes" role="text" class="btn btn-light, resu" name="resultastes"></button>
    <br>
    <br>
    <br>
    <br>
</div>
  <div class="renglon">
  <button id="AC" role="button" class="btn btn-light, cuadro" name="AC">AC</button>
  <button id="negacion" role="button" class="btn btn-light, cuadro" name="negacion">+/-</button>
  <button id="dividir" role="button" class="btn btn-light, cuadro, opera" name="dividir">/</button>
  <button id="multiplicar" role="button" class="btn btn-light, cuadro, opera" name="multiplicar">*</button>
</div>
<div class="renglon">
  <button id="siete" role="button" class="btn btn-light, cuadro, btnn" name="siete">7</button>
  <button id="ocho" role="button" class="btn btn-light, cuadro, btnn" name="ocho">8</button>
  <button id="nueve" role="button" class="btn btn-light, cuadro, btnn" name="nueve">9</button>
  <button id="menos" role="button" class="btn btn-light, cuadro, opera" name="menos">-</button>
</div>
<div class="renglon">
  <button id="cuatro" role="button" class="btn btn-light, cuadro, btnn" name="cuatro">4</button>
  <button id="cinco" role="button" class="btn btn-light, cuadro, btnn" name="cinco">5</button>
  <button id="seis" role="button" class="btn btn-light, cuadro, btnn" name="seis">6</button>
  <button id="mas" role="button" class="btn btn-light, cuadro, opera" name="mas">+</button>
</div>
<div class="renglon">
  <button id="uno" role="button" class="btn btn-light, cuadro, btnn" name="uno">1</button>
  <button id="dos" role="button" class="btn btn-light, cuadro, btnn" name="dos">2</button>
  <button id="tres" role="button" class="btn btn-light, cuadro, btnn" name="tres">3</button>
  <button id="potencia" role="button" class="btn btn-light, cuadro, opera" name="potencia">^</button>
</div>
<div class="renglon">
  <button id="cero" role="button" class="btn btn-light, cuadro, btnn" name="cero">0</button>
  <button id="punto" role="button" class="btn btn-light, cuadro" name="punto">.</button>
  <button id="porciento" role="button" class="btn btn-light, cuadro" name="porciento">%</button>
  <button id="igual" role="button" class="btn btn-light, cuadro" name="igual">=</button>
</div>
    @yield('contenido')
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.js"></script>
</body>
  <script type="text/javascript">
    $(document).ready(function(){
      $operaciones='';
      $num1="";
      $num2=0;
      $('.resu').css({'position' : 'relative', 'float' : 'left', 'height' : '90px', 'width' : '97%','background-color' : '#ffff', 'margin' : '1px', 'text-align' : 'right', 'font-size' : '50px'});
      $('div').css({'width' : '100%', 'height' : '100%', 'margin' : 'auto', 'max-width' : '27%'});
      $('.cuadro').css({'position' : 'relative', 'float' : 'left', 'height' : '90px', 'width' : '24.3%','background-color' : '#000000', 'margin' : '0px','font-size' : '250%', 'color' : 'white'});
      $('.btnn').css({'position' : 'relative', 'float' : 'left', 'height' : '90px', 'width' : '24.3%','background-color' : '#000000', 'margin' : '0px','font-size' : '300%', 'color' : 'white'});
      $('inputn').css({'height' : '100px', 'width' : '100%', 'font-size' : '80px'});
      $('.opera').css({'position' : 'relative', 'float' : 'left', 'height' : '90px', 'width' : '24.3%','background-color' : '#F39C12', 'margin' : '0px','font-size' : '300%', 'color' : 'white'});
      $('#AC').click(function(){
        $('#resultastes').text('');
        $num1='';
      $num2=0;
      $operaciones='';
      });
      $('#negacion').click(function(){
        $('#resultastes').text($num1*-1);
        $num1=$num1*-1;
      });
      $('#igual').click(function(){
        $('#resultastes').text('');
        $num1=parseFloat($num1);
        if($operaciones=='/'){
          $num1=$num2/$num1;
        }
        else if($operaciones=='*'){
          $num1=$num2*$num1;
        }
        else if($operaciones=='-'){
          $num1=$num2-$num1;
        }
        else if($operaciones=='+'){
          $num1=$num1+$num2;
        }
        else if($operaciones=='^'){
          $x=$num1;
          $res=1;
          for (var i = $x - 1; i >= 0; i--) {
            $res=$res*$num2;
          }
          $num1=$res;
        }
        else
        {
          $('#resultastes').text($num1);  
        }
        $('#resultastes').text($num1);
        $operaciones='';
      });
      $('#porciento').click(function(){
        $('#resultastes').text($num1/100);
        $num1=$num1/100;
      });
      $('.opera').click(function(){
        $operaciones=$(this).html();
        $('#resultastes').text('');
        $num2=parseFloat($num1);
        $num1="";
      });
      $('.btnn').click(function(){
        $variable=$(this).html();
        $("#resultastes").text($num1+$variable);
        $num1=$num1+$variable;
      });
      $('#punto').click(function(){
        $('#resultastes').text($num1+'.');
        $num1=$num1+'.';
      });
    });
  </script>
</html>
</style>
<!-- $(".btn").click(function(e){
  $(this).html();
  $(this).val();
});
$("body").on("click","#RA", function(){
  <button>r</button>
});
$('<p>un nuevo parrafo</p>').appendTo("#li li:first"); -->