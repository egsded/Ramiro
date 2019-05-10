@extends('baseMarmoleria')
@section('Contenido')  
<br>
<br>
  <div class="row justify-content-md-center">
    <div class="col-6">
      <div class="card">
      <div class="card-header">
        Registrar Materiales
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
        <form action="{{url('/registrarMateriales')}}" method="post">
          {{ csrf_field() }}
          
        <div class="form-group">
          <label for="NombreInput"> Material </label>
          <input name="nombreMaterial" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese el nombre del Material">
        </div>
        <div class="form-group">
          <label for="ApellidoPaternoInput"> Color </label>
          <input name="color" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese el Color del material">
        </div>
        
      
              <button type="submit" class="btn btn-primary">Enviar </button>
        </div>
      </div>
      
    </div>
  </div>
</form>
@endsection