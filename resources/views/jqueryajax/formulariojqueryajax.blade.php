<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @yield('cssextra')
        <title>Colecciones</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="/css/bootstrap.css" rel="stylesheet">
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>       -->
        <script src="/js/bootstrap.js"></script>
    </head>

<body style="background-color: #3339">
<div>
{{csrf_field()}}

<div align="left" style="margin-left: 5%">
 <br>
<input type="text" name="texto" id="text" placeholder="escribe algo">
  <button name="btnpt" id="btnpt" class="btn btn-secondary" style="height: 45px;width: 140px; background-color: #566573;margin-bottom: 6px">Enviar peticion</button>

  <ul id="ListaAlumnos"></ul>



</div>



</div>
</div>
@yield('contenido')

        


        <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
        <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

        <script src="/js/bootstrap.js"></script>


    </body>
    <script type="text/javascript">
      $(document).ready(function(){

      $("#btnpt").click(function(pifi){
        $elemento=$("#text").val();
        pifi.preventDefault();
        var token = $("input[name=token]").val();
        $.ajax({
          url:"/micoleccion",
          data:{alumno:{nombre:$elemento},_token:token},
          type:"GET",
          dataType :"json",
          success: function(response){
            var li=""; 
            var lista = $("#ListaAlumnos");
              $.each(response,function(i,r){
                li+='<li>'+r.nombre+'</li>';  
              });

              lista.append(li);
            

          }
        });
      });
    
   });
        
    </script>
</html>