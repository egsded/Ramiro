<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  @yield('cssextra')
  <title></title>
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

  <link rel="stylesheet" href="/css/hola.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style type="text/css">
/*html, body {
    height: 100%;
  }*/
  .btn{
    position : relative; 
    float : left; 
    height : 90px; 
    width : 30%; 
    background-color : #000000;
    margin : 1px; 
    font-size : 250%; 
    color : white; 
    font-size : 25px;}
    div{
      width : 100%;
      height : 100%;
      margin : auto;
      max-width : 27%;
    }
    .popo{
     float: left;
     margin-top: 5%;
     margin-left: 35%;
     height : 70%; 
     width : 50%; 
    }
</style>
<body style="background-color: #3339">
<br>
<div class="renglon">
  <button id="11" class="btn" style="color: white" name="siete"></button>
  <button id="12" class="btn" style="color: white" name="ocho"></button>
  <button id="13" class="btn" style="color: white" name="nueve"></button>
</div>
<div class="renglon">
  <button id="21" class="btn" style="color: white" name="cuatro"></button>
  <button id="22" class="btn" style="color: white" name="cinco"></button>
  <button id="23" class="btn" style="color: white" name="seis"></button>
</div>
<div class="renglon">
  <button id="31" class="btn" style="color: white" name="uno"></button>
  <button id="32" class="btn" style="color: white" name="dos"></button>
  <button id="33" class="btn" style="color: white" name="tres"></button>
</div>
<div class="popo"></div>

    @yield('contenido')
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.js"></script>
</body>
  <script type="text/javascript">
    $(document).ready(function(){

//       $.getJSON('https://cdn.rawgit.com/highcharts/highcharts/057b672172ccc6c08fe7dbb27fc17ebca3f5b770/samples/data/usdeur.json', function(data){
//     Altosgráficos.gráfico('contenedor',{ 
//             gráfico:{ 
//                 zoomType:'x'}, 
//             título:{ 
//                 texto:'Tipo de cambio USD a EUR a lo largo del tiempo'}, 
//             subtítulo:{ 
//                 texto: documento. ontouchstart === ¿¿indefinido? 'Haga clic y arrastre en el área de trazado para acercar':'pellizcar la gráfica para acercar'}, 
//             xAxis:{   
//               escriba:'datetime'}, 
//             yAxis:{ 
//                 title:{ 
//                     text:'Exchange rate'}}, 
//             legend:{ 
//                 enabled:false}, 
//             plotOptions:{ 
//                 area:{ 
//                     fillColor:{ 
//                         linearGradient:{ 
//                             x1:0,
//                             y1:0,
//                             x2:0, 
//                             y2:1}, 
//                         detiene:[[0,Highcharts.getOptions().colores[0]], [1, Highcharts.Colores(Highcharts.GetOptions().Colores[0]).setOpacity(0).obtener('rgba')]]}, 
//                     marcador:{ 
//                         radio:2}, 
//                     lineWidth:1, 
//                     indica:{ 
//                         hover:{ 
//                             lineWidth:1}}, 
//                     umbral:null}},
//             series:[{
//                 type:'area',
//                 name:'USD to EUR',
//                 data:data
//             }]
//         });
//     }
// );


      $('.pushpin-demo-nav').each(function() {
    var $this = $(this);
    var $target = $('#' + $(this).attr('data-target'));
    $this.pushpin({
      top: $target.offset().top,
      bottom: $target.offset().top + $target.outerHeight() - $this.height()
    });
  })
      $signo='O';
      $('.btn').click(function(){
          if($signo=='O'){
            $(this).text('O');
            $(this).attr("disabled", true);
            $signo='X';
            if($('#11').html()=='O' && $('#12').html()=='O' && $('#13').html()=='O' || $('#21').html()=='O' && $('#22').html()=='O' && $('#23').html()=='O' || $('#31').html()=='O' && $('#32').html()=='O' && $('#33').html()=='O' || $('#11').html()=='O' && $('#21').html()=='O' && $('#31').html()=='O' || $('#12').html()=='O' && $('#22').html()=='O' && $('#32').html()=='O' || $('#13').html()=='O' && $('#23').html()=='O' && $('#33').html()=='O' || $('#11').html()=='O' && $('#22').html()=='O' && $('#33').html()=='O' || $('#13').html()=='O' && $('#22').html()=='O' && $('#31').html()=='O')
            {
                $(".popo").append("<div class='alert alert-success animated bounceInLeft delay' role='alert'> ganaron las O</div>");
              $('.btn').attr("disabled", true);
            }
          }else if($signo=='X'){
            $(this).text('X');
            $(this).attr("disabled", true);
            $signo='O';
            if($('#11').html()=='X' && $('#12').html()=='X' && $('#13').html()=='X' || $('#21').html()=='X' && $('#22').html()=='X' && $('#23').html()=='X' || $('#31').html()=='X' && $('#32').html()=='X' && $('#33').html()=='X' || $('#11').html()=='X' && $('#21').html()=='X' && $('#31').html()=='X' || $('#12').html()=='X' && $('#22').html()=='X' && $('#32').html()=='X' || $('#13').html()=='X' && $('#23').html()=='X' && $('#33').html()=='X' || $('#11').html()=='X' && $('#22').html()=='X' && $('#33').html()=='X' || $('#13').html()=='X' && $('#22').html()=='X' && $('#31').html()=='X')
            {
              $(".popo").append("<div class='alert alert-success animated bounceInLeft delay' role='alert'> ganaron las X</div>");
              $('.btn').attr("disabled", true);
            }
          }
      });
    });
  </script>
  </html>