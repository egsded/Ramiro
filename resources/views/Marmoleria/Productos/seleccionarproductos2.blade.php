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
  <body background="fondo7.jpg">


{{--dropdown de CLIENTES--}}

<ul id="dropdown1" class="dropdown-content">
  <li><a  href="{{ url('/registrarClientes') }}"> Registrar Cliente </a></li>
  <li class="divider"></li>
  <li> <a href="{{ url('/seleccionarClientes') }}"> Actualizar y/o Eliminar Cliente </a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/verClientes') }}"> Ver Clientes </a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/clientesingresados') }}"> Historial de Clientes Registrados </a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/clientesborrados') }}"> Ver Clientes Borrados </a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/clientesmodificados') }}"> Ver Clientes Modificados </a></li>
</ul>




{{--dropdown de PRODUCTOS--}}

<ul id="dropdown2" class="dropdown-content">
  <li><a  href="{{ url('/registrarProductos') }}"> Registrar Producto </a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/verProductos') }}"> Actualizar y/o Eliminar Producto </a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/verProductos') }}"> Ver Productos</a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/registrarMateriales') }}"> Registrar Material </a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/seleccionarMaterial') }}"> Actualizar y/o Eliminar Material </a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/verMateriales') }}"> Ver Materiales</a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/registrarCategoria') }}"> Registrar Categoria </a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/seleccionarCategoria') }}"> Actualizar y/o Eliminar Categoria</li>
  <li class="divider"></li>
  <li><a  class="dropdown-item" href="{{ url('/verCategoria') }}"> Ver Categoria </a></li>
 </ul>

{{--dropdown de ESTADOS Y LOCALIDADES--}}

<ul id="dropdown3" class="dropdown-content">
  <li><a href="{{ url('/registrarEstados') }}"> Registrar Estado </a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/seleccionarEstados') }}"> Actualizar y/o Eliminar Estado </a></li>
  <li class="divider"></li>
  <li><a  href="{{ url('/verEstados') }}"> Ver Estados</a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/registrarLocalidades') }}"> Asignar una Localidad </a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/seleccionarLocalidades') }}"> Actualizar y/o Eliminar Localidad</li>
  <li class="divider"></li>
  <li><a href="{{ url('/verLocalidades') }}"> Ver Localidades </a></li>



</ul>
  
{{--NAV--}}

  <nav class="grey darken-1">
  <div class="nav-wrapper">
  <a href="#" style="font-size: 25px"><img style="width: 4%; height: 70%;margin-left: 9px;" src="logo7.png"> Marmolerias Torreon</a>
  <ul class="right hide-on-med-and-down">
     
  <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Clientes<i class="material-icons right">arrow_drop_down</i></a></li>

  <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Productos<i class="material-icons right">arrow_drop_down</i></a></li>

  <li><a class="dropdown-trigger" href="#!" data-target="dropdown3">Estados y localidades<i class="material-icons right">arrow_drop_down</i></a></li>
    
  <li><a href="sass.html">Iniciar Sesion</a></li>
  </ul>
  </div>
</nav>

<div style="padding: 0;margin: 0;display: flex;min-height: 100vh;flex-wrap: wrap;padding-top: 50px;padding-bottom: 50px">
@yield('Contenido')
</div>

  <footer class="page-footer grey darken-1" style="align-self: flex-end;width: 100%">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Marmoleria Torreon</h5>
                <p class="grey-text text-lighten-4">Calle sexta #148 </p>
                <p class="grey-text text-lighten-4">Colonia Vicente Guerrero </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Redes Sociales</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/marmoleri.torreon?jazoest=265100119728610174818411012067821088687724589748974726810511465711208711265113806811483871001019584898310510358651001208345106741197798525270871206811187551181106811156535265711005286117521028850885184771197182988865"><img style="width: 10%; height: 23%; margin-top: 10px" src="facebook.png"> Marmoleri Torreon </a></li>
                  <li><a class="grey-text text-lighten-3"><img style="width: 6.5%; height: 20%;margin-left: 9px;margin-top: 10px" src="whatsapp.png"> &nbsp 87-17-68-33-18</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">

            </div>
          </div>
        </footer>
        
            
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