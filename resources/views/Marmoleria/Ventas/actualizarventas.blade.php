@extends('baseMarmoleria3')
@section('Contenido')
<br>
<br>
	<div class="row justify-content-md-center">
    <div class="col-6">
      <div class="card">
      <div class="card-header">
        Actualizar Venta
      </div>
      <div class="card-body">
         @if(isset($id))
        
        @else
        
        <form action="/actualizarVentas/{{ $ventas->id }}" method="POST">
        {{ csrf_field() }}
        
        <div class="form-group">
        <label for="inputID"> Cliente: </label>
          <select name="idclientes"id="idclientes" class="form-control">
            @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
          </select>
        </div>
        @foreach($venta as $ventax)
        <div class="form-group">
          <label for="MontoInput"> Monto </label>
          <input value="{{ $ventax->monto }}" name="monto" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="CantidadInput"> Cantidad </label>
          <input value="{{ $ventax->cantidad }}" name="cantidad" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="MontoExtraInput"> Monto Extra </label>
          <input value="{{ $ventax->monto_extra }}" name="montoextra" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="OracionInput"> Oración </label>
          <input value="{{ $ventax->oracion }}" name="oracion" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="TotalInput"> Total </label>
          <input value="{{ $ventax->total }}" name="total" type="text" class="form-control">
        </div>
              <button type="submit" class="btn btn-primary btn-block">Enviar </button>
              
        </div>
        @endforeach
      </div>
      
      @endif
      {!! Form::close() !!}
    </div>

    
  </div>

@endsection

