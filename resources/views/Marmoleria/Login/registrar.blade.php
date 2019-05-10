@extends('baseMarmoleria')
@section('Contenido')  
<br>
<br>
  <div class="row justify-content-md-center">
    <div  style="width: 600px">
      <div class="card">
      <div class="card-header">
        Registrar
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
        <form action="{{url('/registrarse')}}" method="post">
          {{ csrf_field() }}
          
        <div class="form-group">
          <label for="NombreInput"> Usuario </label>
          <input name="nombreUsuario" type="text" class="form-control" id="usuario" placeholder="Ingrese el nombre del Usuario">
        </div>
        <div class="form-group">
          <label for="ContraseñaInput"> Contraseña </label>
          <input name="password" type="password" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese la Contraseña">
        </div>
        <div class="form-group">
          <label for="ContraseñaInput"> Contraseña </label>
          <input name="password_confirmation" type="password" class="form-control" id="formGroupExampleInput3" placeholder="Ingrese la Contraseña">
        </div>
      
              <button type="submit" class="btn btn-primary">Enviar </button>
        </div>
      </div>
      
    </div>
  </div>
</form>
@endsection