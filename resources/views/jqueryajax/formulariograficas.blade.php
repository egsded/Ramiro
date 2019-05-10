<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <style type="text/css" media="screen">
  </style>
    </head>

<body style="background-color: lightgray;">
<div>
{{csrf_field()}}

<div align="left">
 <br>
            
  <button name="btnpt" id="btnpt" class="btn btn-secondary" style="height: 45px;width: 140px; background-color: #566573;margin-bottom: 6px">Enviar peticion</button>

  <div id="container"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <script src="/js/bootstrap.js"></script>
        
    </body>
    <script>
      $(document).ready(function(){ 
      $("#btnpt").click(function(){
        var nombres = [];
        var edad = [];
        var int = [];
        var token=$('input[name=_token]').val();
        $.ajax({
          url: "/consultagraf",
          data: {_token:token},
          type: "post",
          dataType: "json",
              
                success: function(response)
                {
                    $.each(response,function(i,r){
                      nombres = (r.nombre);
                      edad = parseFloat(r.edad);
                      int.push(edad);
                    var myChart = Highcharts.chart('container', {
                      chart: {
                          type: 'pie'
                      },
                      title: {
                          text: 'Edades'
                      },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                dataLabels: {
                                    enabled: false
                                },
                                showInLegend: false
                            }
                        },
                      series: [{
                          name: 'edades',
                          data: int
                      },]
                      });

                      });

                  },
                });
              });
            });
// Highcharts.chart('container', {
//     chart: {
//         type: 'pie'
//     },
//     title: {
//         text: 'Utilidades del internet'
//     },
//     plotOptions: {
//         pie: {
//             allowPointSelect: true,
//             dataLabels: {
//                 enabled: false
//             },
//             showInLegend: true
//         }
//     },
//     series: [{
//         name: 'Porcentaje',
//         colorByPoint: true,
//         data: [{
//             name: 'Marranadas',
//             y: 61.41,
//             sliced: true
//         }, {
//             name: 'Redes sociales',
//             y: 18.89
//         }, {
//             name: 'Tareas escolares',
//             y: 10.85
//         }, {
//             name: 'Proyectos de empresas',
//             y: 4.67
//         }, {
//             name: 'Comunicación',
//             y: 4.18
//         }
//         ]
//     }],

//     colors: ['#6CF', '#39F', '#06C', '#036', '#237519', '#29B219', '#32D61F', '#33F91B', '#78FC68'],
// });
    </script>
</html>