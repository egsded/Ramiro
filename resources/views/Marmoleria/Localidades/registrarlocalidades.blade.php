@extends('baseMarmoleria3')
@section('Contenido')  
<br>
<br>
  <div class="row justify-content-md-center">
    <div style="width: 600px">
      <div class="card">
      <div class="card-header">
        Registrar Localidades
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
        <form action="{{url('/registrarLocalidades')}}" method="post">
          {{ csrf_field() }}
          
        <div class="form-group">
          <label for="NombreInput"> Localidades </label>
          <input name="nombreLocalidad" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese el nombre de la Localidad">
        </div>
        <div class="form-group">
          <label for="MontoInput"> Monto </label>
          <input name="monto" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese el monto de la localidad">
        </div>
        <div class="form-group">
        <label for="inputID"> Estado: </label>
          <select name="idlocalidad"id="idlocalidad" class="form-control">
            @foreach($estados as $estado)
                <option value="{{$estado->id}}">{{$estado->estado}}</option>
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