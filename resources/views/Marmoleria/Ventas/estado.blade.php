@extends('baseMarmoleria')
@section('Contenido')  
<br>
<br>
  <div class="row justify-content-md-center">
    <div style="width: 600px">
      <div class="card">
      <div class="card-header">
        Registrar Ventas
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
        <form action="{{url('/registrarVentas')}}" method="get">
          {{ csrf_field() }}
          
        <div class="form-group">
        <label for="inputID"> Cliente: </label>
          <input name="cliente" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nombre de quien hará la compra">
        </div>
        <div class="form-group">
        <label for="inputID"> Producto: </label>
          <select name="produ" id="formGroupExampleInput2" class="form-control">
            @foreach($productos as $estado)
                <option value="{{$estado->id}}">{{$estado->id}}</option>
                @endforeach
          </select>
        </div>
        <div class="form-group">
        <label for="inputID"> Estado: </label>
          <select name="estado" id="formGroupExampleInput2" class="form-control">
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