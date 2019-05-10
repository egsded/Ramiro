@extends('baseMarmoleria')
@section('Contenido')


	<div class="container">
		<form action="/login" method="post" accept-charset="utf-8">
<br>
<br>
  


  <div class="row justify-content-md-center">
    <div class="col-6">
      <div class="card">
      <div class="card-header">
        Inicio de Sesion
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
          {{ csrf_field() }}
          @if(Session::has("Mensaje"))
          <div class="alert alert-info animated bounceInUp" role="alert">
            <strong> {{Session::get("Mensaje")}} </strong>
          </div>
          @endif
        <div class="form-group">
          <label for="NombreInput"> Usuario </label>
          <input name="nombreUsuario" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese su nombre de Usuario">
        </div>
        <div class="form-group">
          <label for="PasswordInput"> Contraseña </label>
          <input name="password" type="password" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese la Contraseña">
        </div>
              <button class="btn waves-effect waves-light" type="submit" name="action">Iniciar Sesion
              <i class="material-icons left">send</i></button>
        </div>
      </div>
      
    </div>
  
		</form>
	</div>



@endsection