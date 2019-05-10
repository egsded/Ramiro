@extends('baseMarmoleria3')
@section('Contenido')  
<br>
<br>
  <div class="row justify-content-md-center">
    <div style="width: 600px">
      <div class="card">
      <div class="card-header">
        Registrar Categoria
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
        <form action="{{url('/registrarCategoria')}}" method="post">
          {{ csrf_field() }}
          
        <div class="form-group">
          <label for="NombreInput"> Categoria </label>
          <input name="nombreCategoria" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese categoria">
        </div>
        
      
              <button type="submit" class="btn btn-primary">Enviar </button>
        </div>
      </div>
      
    </div>
  </div>
</form>
@endsection