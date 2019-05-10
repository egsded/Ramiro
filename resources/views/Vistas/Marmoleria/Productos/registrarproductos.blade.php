@extends('baseMarmoleria')
@section('Contenido')  
<br>
<br>
  <div class="row justify-content-md-center">
    <div class="col-6">
      <div class="card">
      <div class="card-header">
        Registrar Producto
      </div>
      <div class="card-body">
         @if($errors->any())
          <div class="alert alert-info animated bounceInUp" role="alert">
            <strong> Tenemos los siguientes errores </strong>
            @foreach($errors->all() as $error)
            <ul>
              <li>{{$error}}</li>
            </ul>
            @endforeach
          </div>
          @endif
        <form action="{{url('/registrarProductos')}}" method="post">
          {{ csrf_field() }}
          
        <div class="form-group">
          <label for="NombreInput"> Producto </label>
          <input name="nombreProducto" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese el nombre del Producto">
        </div>
        <div class="form-group">
          <label for="ApellidoPaternoInput"> Descripción </label>
          <input name="descripción" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese la Descripción del producto">
        </div>
        
      
              <button type="submit" class="btn btn-primary">Enviar </button>
        </div>
      </div>
      
    </div>
  </div>
</form>
@endsection