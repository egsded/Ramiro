@extends('baseMarmoleriaMaterialize')
@section('Contenido')

<br>
<br>
  <div class="row justify-content-md-center z-depth-5">
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
          <input name="nombreMaterial" type="text" class="form-control" value="{{old('nombreMaterial')}}" placeholder="Ingrese el nombre de un Material">
        </div>
        <div class="form-group">
          <label for="ColorInput"> Color </label>
          <input name="color" type="text" class="form-control" value="{{old('color')}}" placeholder="Ingrese el color del Material">
        </div>
             <button class="btn waves-effect waves-light" type="submit" name="action" style="margin-left: 550px"> Registrar 
             <i class="material-icons right">add</i>
             </button>
        </div>
      </div>
      
    </div>
  </div>
</form>


@endsection