<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <body style="background-color: #515A5A">

{{--dropdown de CLIENTES--}}

<ul id="dropdown1" class="dropdown-content">
  <li><a  href="{{ url('/registrarClientes') }}"> Realizar Compra </a></li>
  <li class="divider"></li>
</ul>




{{--dropdown de PRODUCTOS--}}

<ul id="dropdown2" class="dropdown-content">
  @if(Session::has('usuario'))
  <li><a href="{{ url('/seleccionarCategoria') }}"> Ver Catalogo</li>
  @endif
  @if(!Session::has('usuario'))
  <li><a href="{{ url('/seleccionarcategoriassin') }}"> Ver Catalogo</li>
  @endif
  
  
 </ul>

{{--dropdown de ESTADOS Y LOCALIDADES--}}

<ul id="dropdown3" class="dropdown-content">
  <li><a href="{{ url('/verLocalidades') }}"> Ver Localidades </a></li>
</ul>
  
{{--NAV--}}

  <nav class="grey darken-1">
  <div class="nav-wrapper">
  <a href="#!" class=""><img style="width: 4.2%; height: 70%;margin-left: 9px;" src="/logo7.png"> Marmolerias Torreon</a>
  <ul class="right hide-on-med-and-down">
    
   @if(Session::has('usuario'))
  <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Clientes<i class="material-icons right">arrow_drop_down</i></a></li>
  @endif
  
  <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Productos<i class="material-icons right">arrow_drop_down</i></a></li>
 
  @if(Session::has('usuario'))
  <li><a class="dropdown-trigger" href="#!" data-target="dropdown3">Estados y localidades<i class="material-icons right">arrow_drop_down</i></a></li>
  @endif
   @if(!Session::get('usuario'))
   <li><a href="/registrarse">Registrarse! </a></li>
  <li><a href="/login">Iniciar Sesion</a></li>
  @endif
   @if(Session::has('usuario'))
  <li>
    <div>
    <a class="btn disabled">
      Usuario: "{{Session::get("usuario")->usuario}}"
      </a>
    </div>
  </li>

  <li>
  <a class="waves-effect waves-light btn" href="/logout"><i class="material-icons left">cancel</i>Cerrar Sesion</a>
</li>
  @endif
  </ul>
  </div>
</nav>

<div style="padding: 0;margin: 0;display: flex;min-height: 100vh;flex-wrap: wrap;padding-top: 50px;padding-bottom: 50px">
@yield('Contenido')
</div>

        
            
<script type="text/javascript">
$(function()
{
  $('#idcategoria').on('change', select);

});

function select()
{
  var categoria_id = $('#idcategoria').val();
  //alert(categoria_id);

  if(categoria_id == 1 )
  {
    $("#oracion").show();
    
  }
  else
  {
    $("#oracion").css({"display" : "none"});
  }

  if(categoria_id == 0)
  {
    $("#productos").css({"display" : "none"});
  }
  else
  {
    $("#productos").show();
  }


  //Ajax
  $.get('/api/seleccion/'+categoria_id+'/categoria', function(data)
  {

    var html_select;
    var lel = data.length;
    for (var i=0; i<lel ; ++i)
    html_select += '<option value="'+data[i].id+'">'+data[i].producto+'</option>';
    return $('#idproductos').html(html_select);
  });
}
</script>

{{--Script del dropdown--}}

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });

  // Or with jQuery

  $('.dropdown-trigger').dropdown();


</script>



<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/alertify.min.js')}}"></script>
  <!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>