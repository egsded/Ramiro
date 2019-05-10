@extends('baseMarmoleria3')
@section('Contenido')
<br>
<br>
	<div class="row justify-content-md-center z-depth-5">
    <div class="col-6">
      <div class="card">
      <div class="card-header">
        Actualizar Producto
      </div>
      <div class="card-body">
        @if(isset($id))
        
        @else
        <form action="/actualizarCategoria/{{ $categorias->id }}" method="POST">
          
          
        {{ csrf_field() }}
        <div class="form-group">
          <label for="NombreInput"> Producto </label>
          <input value="{{ $categorias->categoria }}" name="nombreCategoria" type="text" class="form-control" >
        </div>
              <button type="submit" class="btn btn-primary btn-block">Enviar </button>
              
        </div>

      </div>
      @endif
      {!! Form::close() !!}
    </div>
    
  </div>

@endsection