@extends('baseMarmoleria')
@section('Contenido')
<br>
<br>
	<div class="row justify-content-md-center">
    <div class="col-6">
      <div class="card">
      <div class="card-header">
        Actualizar Cliente
      </div>
      <div class="card-body">
        @if(isset($id))
        
        @else
        <form action="/actualizarClientes/{{ $clientes->id }}" method="POST">
          
        <div class="form-group">
          {{ csrf_field() }}
          <label for="NombreInput"> Nombre </label>
          <input value="{{ $clientes->nombre }}" name="nombreCliente" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="CorreoInput"> Correo </label>
          <input value="{{ $clientes->correo }}" name="correo" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="TelefonoInput"> Teléfono </label>
          <input value="{{ $clientes->telefono }}" name="telefono" type="text" class="form-control">
        </div>
        <div class="form-group">
        <label for="inputID"> Localidad: </label>
          <select name="idlocalidad"id="idlocalidad" class="form-control">
            @foreach($localidades as $localidad)
                <option value="{{ $localidad->id }}">{{ $localidad->localidad }}</option>
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