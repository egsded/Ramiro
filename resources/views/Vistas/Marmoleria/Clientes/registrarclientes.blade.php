@extends('baseMarmoleria')
@section('Contenido')  
<br>
<br>
  <div class="row justify-content-md-center">
    <div class="col-6">
      <div class="card">
      <div class="card-header">
        Registrar Clientes
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
        <form action="{{url('/registrarClientes')}}" method="post">
          {{ csrf_field() }}
          
        <div class="form-group">
          <label for="NombreInput"> Nombre </label>
          <input name="nombreCliente" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese el nombre del Cliente">
        </div>
        <div class="form-group">
          <label for="CorreoInput"> Correo </label>
          <input name="correo" type="email" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese un Correo Electrónico">
        </div>
        <div class="form-group">
          <label for="TelefonoInput"> Telefono </label>
          <input name="telefono" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese el Teléfono del cliente">
        </div>
        <div class="form-group">
        <label for="inputID"> Localidad: </label>
          <select name="idlocalidad"id="idlocalidad" class="form-control">
            @foreach($localidades as $localidad)
                <option value="{{$localidad->id}}">{{$localidad->localidad}}</option>
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