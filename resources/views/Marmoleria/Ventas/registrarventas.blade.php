@extends('baseMarmoleria')
@section('Contenido')  
<br>
<br>
  <div class="row justify-content-md-center">
    <div style="width: 600px">
      <div class="card">
      <div class="card-header">
        Registrar Ventas
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
        <form action="{{url('/registrarVentas')}}" method="post">
          {{ csrf_field() }}
          
        <div class="form-group">
        <label for="inputID"> Cliente: </label>
          <input name="cliente" type="text" class="form-control" id="formGroupExampleInput2" placeholder="{{$cliente}}">
        </div>
        <div class="form-group">
        <label for="inputID"> Telefono: </label>
          <input name="telefono" type="text" class="form-control" id="formGroupExampleInput2" placeholder="7245262">
        </div>
        <div class="form-group">
        <label for="inputID"> Correo: </label>
          <input name="correo" type="text" class="form-control" id="formGroupExampleInput2" placeholder="ejemplo@gmail.com">
        </div>
        <div class="form-group">
        <label for="inputID"> Localidad: </label>
          <select name="localidad" id="formGroupExampleInput2" class="form-control">
            @foreach($localidad as $estado)
                <option value="{{$estado->id}}">{{$estado->localidad}}</option>
                @endforeach
          </select>
        </div>
        <div class="form-group">
        <label for="inputID"> Producto: </label>
          <select name="producto" id="formGroupExampleInput2" class="form-control">
            @foreach($productos as $produ)
                <option value="{{$produ->producto}}">{{$produ->producto}}</option>
                @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="CantidadInput"> Cantidad </label>
          <input name="cantidad" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese la Cantidad de la Venta">
        </div>
        <div class="form-group">
        <label for="MontoInput"> Monto </label>
          <select name="monto" id="formGroupExampleInput2" class="form-control">
            @foreach($productos as $produ)
                <option value="{{$produ->presio}}">{{$produ->presio}}</option>
                @endforeach
          </select>
        </div>
        <!-- <div class="form-group">
          <label for="MontoExtraInput"> Monto Extra </label>
          <input name="montoextra" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese el Monto Extra de la Venta">
        </div> -->
        <div class="form-group">
          <label for="OracionInput"> Oración </label>
          <input name="oracion" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese la Oracion de la Venta">
        </div>
        <div class="form-group">
        <label for="MontoInput"> Forma de pago </label>
          <select name="pago" id="formGroupExampleInput2" class="form-control">
            @foreach($pagos as $produ)
                <option value="{{$produ->id}}">{{$produ->forma_de_pago}}</option>
                @endforeach
          </select>
        </div>
              <button type="submit" class="btn btn-primary">Enviar </button>
        </div>
      </div>
      
    </div>
  </div>
</form>
@endsection