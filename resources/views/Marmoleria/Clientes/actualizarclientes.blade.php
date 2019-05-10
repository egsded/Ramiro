@extends('baseMarmoleria3')
@section('Contenido')
<br>
<br>
	<div class="row justify-content-md-center z-depth-5">
    <div style="width: 600px;">
      <div class="card">
      <div class="card-header">
        Actualizar Cliente
      </div>
      <div class="card-body">
        @if(isset($id))
        
        @else
        <form action="/actualizarClientes/{{ $clientes->id }}" method="POST">
          
        <div class="form-group" style="display: none;">
          {{ csrf_field() }}
          <label for="NombreInput"> Nombre </label>
          <input value="{{ $clientes->nombre }}" name="nombreCliente" type="text" class="form-control">
        </div>
        <div class="form-group">
          {{ csrf_field() }}
          <label for="NombreInput"> Nombre </label>
          <input value="{{ $saldos }}" name="nombreCliente" type="text" class="form-control">
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
          <label for="inputID"> Categoria: </label>
          <select name="idcategoria"id="idcategoria" class="form-control">
            <option value="0"> == Seleccione una Categoria == </option>
            @foreach($categoria as $cat)
                <option value="{{$cat->id}}">{{$cat->categoria}}</option>
                @endforeach
          </select>
        </div>
        <div id="productos" class="form-group" style="display: none;">
        <label for="inputID"> Producto: </label>
          <select name="idproductos"id="idproductos" class="form-control" id="producto">
            <option value=""> == Seleccione primero una Categoria == </option>
           
              @foreach($productos as $prod)
                <option value="{{$prod->id}}">{{$prod->producto}}</option>
              @endforeach
           
          </select>
        </div>
         <div class="form-group">
          <label for="CantidadInput"> Cantidad </label>
          <input name="cantidad" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese la cantidad a comprar">
        </div>
        <div class="form-group" id="oracion" style="display:none;">
          <label for="OracionInput"> Oración </label>
          <input name="oracion" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese la oración">
        </div>
        <div>
        <div class="form-group">
        <label for="inputID"> Localidad: </label>
          <select name="idlocalidad"id="idlocalidad" class="form-control">
            <option value=""> == Seleccione una Localidad == </option>
            @foreach($localidades as $localidad)
                <option value="{{ $localidad->id }}">{{ $localidad->localidad }}</option>
                @endforeach
          </select>
        </div>
        <div class="form-group">
        <label for="inputID"> Forma de pago </label>
          <select name="idfpago"id="idfpago" class="form-control" id="formapago">
             <option value=""> == Seleccione una Forma de Pago == </option>
            @foreach($formapago as $fpago)
                <option value="{{$fpago->id}}">{{$fpago->forma_de_pago}}</option>
                @endforeach
          </select>
        </div>
        
              <button type="submit" class="btn btn-primary btn-block">Enviar </button>
              
        </div>

      </div>
      @endif
      </form>
    </div>
  </div>

@endsection