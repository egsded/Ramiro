@extends('baseMarmoleria')
@section('Contenido')
<br>
<br>
	<div class="row justify-content-md-center">
    <div class="col-6">
      <div class="card">
      <div class="card-header">
        Actualizar Material
      </div>
      <div class="card-body">
        @if(isset($id))
        
        @else
        <form action="/actualizarMateriales/{{ $materiales->id }}" method="POST">
          
          
        
        <div class="form-group">
          {{ csrf_field() }}
          <label for="NombreInput"> Material </label>
          <input value="{{ $materiales->material }}" name="nombreMaterial" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese el nombre del Material">
        </div>
        <div class="form-group">
          <label for="ApellidoPaternoInput">Color</label>
          <input value="{{ $materiales->color }}" name="color" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese el Color del material">
        </div>
              <button type="submit" class="btn btn-primary btn-block">Enviar </button>
              
        </div>

      </div>
      @endif
      {!! Form::close() !!}
    </div>
  </div>

@endsection