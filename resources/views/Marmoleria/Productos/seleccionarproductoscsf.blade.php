
<!-- 
<style type="text/css">
  .card{
    float : left;
  height : 450px;
  width : 255px;
  font-size: 90%;
  }
</style> -->

@extends('baseMarmoleriacsf')
@section('Contenido')
  <div class="container" style="height: 100%; width: 100%;">
  <div class="card-deck">
    @foreach($productos as $producto)
    <div class="row">
      <div class="card z-depth-5 bg-dark text-light" style="float: left; height: 450px; width: 255px; font-size: 90%">
        <br>
        <div class="card-image" align="center">
          <img class="materialboxed" src="/storage/{{$producto->imagen}}" style="height: 50%; width: 80%">
        </div>
        <div class="card-content">
          <b>{{$producto->descripcion}}</b>
        </div>
        <div class="card-action">
          <a href="/selecciondeestadodelcliente/{{$producto->id}}">Venta producto</a>
        </div>
      </div>
    </div>
    @endforeach
    </div>
  </div>  

@endsection  

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems);
  });

  $(document).ready(function(){
    $('.materialboxed').materialbox();
    $('.pushpin-demo-nav').each(function() {
    var $this = $(this);
    var $target = $('#' + $(this).attr('data-target'));
    $this.pushpin({
      top: $target.offset().top,
      bottom: $target.offset().top + $target.outerHeight() - $this.height()
    });
  });
  });
</script>
