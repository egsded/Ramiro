@extends('baseMarmoleria')
@section('Contenido')
<br>
<br>
	<div class="row justify-content-md-center">
    <div class="col-6">
      <div class="card">
      <div class="card-header">
        Actualizar Producto
      </div>
      <div class="card-body">
        @if(isset($id))
        
        @else
        <form action="/actualizarProductos/{{ $productos->id }}" method="POST">
          
          
        
        <div class="form-group">
          {{ csrf_field() }}
          <label for="NombreInput"> Producto </label>
          <input value="{{ $productos->producto }}" name="nombreProducto" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese un Nombre">
        </div>
        <div class="form-group">
          <label for="ApellidoPaternoInput">Descripción</label>
          <input value="{{ $productos->descripcion }}" name="descripcion" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su Apellido Paterno">
        </div>
              <button type="submit" class="btn btn-primary btn-block">Enviar </button>
              
        </div>

      </div>
      @endif
      {!! Form::close() !!}
    </div>
    
  </div>

@endsection