@extends('baseMarmoleria3')
@section('Contenido')
<br>
<br>
	<div class="row justify-content-md-center z-depth-5">
    <div class="col-6">
      <div class="card">
      <div class="card-header">
        Actualizar Estado
      </div>
      <div class="card-body">
        @if(isset($id))
        
        @else
        <form action="/actualizarEstados/{{ $estados->id }}" method="POST">
          
          
        
        <div class="form-group">
          {{ csrf_field() }}
          <label for="NombreInput"> Estado </label>
          <input value="{{ $estados->estado }}" name="nombreEstado" type="text" class="form-control">
        </div>
              <button type="submit" class="btn btn-primary btn-block">Enviar </button>
              
        </div>

      </div>
      @endif
      {!! Form::close() !!}
    </div>
  </div>

@endsection