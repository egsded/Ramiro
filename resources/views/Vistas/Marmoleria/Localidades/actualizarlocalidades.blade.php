@extends('baseMarmoleria')
@section('Contenido')
<br>
<br>
	<div class="row justify-content-md-center">
    <div class="col-6">
      <div class="card">
      <div class="card-header">
        Actualizar Localidad
      </div>
      <div class="card-body">
        @if(isset($id))
        
        @else
        <form action="/actualizarLocalidades/{{ $localidades->id }}" method="POST">
          
        <div class="form-group">
          {{ csrf_field() }}
          <label for="NombreInput"> Localidad </label>
          <input value="{{ $localidades->localidad }}" name="nombreLocalidad" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="MontoInput"> Monto </label>
          <input value="{{ $localidades->monto }}" name="monto" type="text" class="form-control">
        </div>
        <div class="form-group">
        <label for="inputID"> Estado: </label>
          <select name="idestado"id="idestado" class="form-control">
            @foreach($estados as $estado)
                <option value="{{ $estado->id }}">{{ $estado->estado }}</option>
                @endforeach
          </select>
        </div>
              <button type="submit" class="btn btn-primary btn-block">Enviar </button>
              
        </div>

      </div>
      @endif
      {!! Form::close() !!}
    </div>
  </div>

@endsection