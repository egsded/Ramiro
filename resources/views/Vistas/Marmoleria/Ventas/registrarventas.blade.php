@extends('baseMarmoleria')
@section('Contenido')  
<br>
<br>
  <div class="row justify-content-md-center">
    <div class="col-6">
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
          <select name="idclientes"id="idclientes" class="form-control">
            @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
          </select>
        </div>
        <div class="form-group">
        <label for="inputID"> Producto: </label>
          <select name="idproducto"id="idproducto" class="form-control">
            @foreach($productos as $producto)
                <option value="{{ $producto->id }}">{{ $producto->producto }}</option>
                @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="CantidadInput"> Cantidad </label>
          <input name="cantidad" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese la Cantidad de la Venta">
        </div>
        <div class="form-group">
          <label for="MontoInput"> Monto </label>
          <input name="monto" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese el Monto de la Venta">
        </div>
        <div class="form-group">
          <label for="MontoExtraInput"> Monto Extra </label>
          <input name="montoextra" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese el Monto Extra de la Venta">
        </div>
        <div class="form-group">
          <label for="OracionInput"> Oración </label>
          <input name="oracion" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese la Oracion de la Venta">
        </div>
        <div class="form-group">
          <label for="TotalInput"> Total </label>
          <input name="total" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese el Total de la Venta">
        </div>
              <button type="submit" class="btn btn-primary">Enviar </button>
        </div>
      </div>
      
    </div>
  </div>
</form>
@endsection