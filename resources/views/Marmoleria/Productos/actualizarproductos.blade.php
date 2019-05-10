@extends('baseMarmoleria3')
@section('Contenido')
<br>
<br>
	<div class="row justify-content-md-center">
    <div style="width: 600px">
      <div class="card">
      <div class="card-header">
        Actualizar Producto
      </div>
      <div class="card-body">
        @if(isset($id))
        
        @else
        <form action="/actualizarProductos/{{ $productos->id }}" method="POST">
          
          
        
        <div class="form-group">
          {{ csrf_field() }}
          <label for="NombreInput"> Producto </label>
          <input value="{{ $productos->producto }}" name="nombreProducto" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese un Nombre">
        </div>
        <div class="form-group">
          <label for="ApellidoPaternoInput">Descripción</label>
          <input value="{{ $productos->descripcion }}" name="descripcion" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su Apellido Paterno">
        </div>
        <div class="form-group">
          <label for="DescripcionInput"> precio </label>
          <input name="precio" type="text" class="form-control" id="formGroupExampleInput2" placeholder="{{$productos->presio}}">
        </div>
        <div class="form-group">
        <label for="inputID"> Categoria: </label>
          <select name="idcategoria"id="idcategoria" class="form-control">
            @foreach($categoria as $cat)
                <option value="{{ $cat->id }}">{{ $cat->categoria }}</option>
                @endforeach
          </select>
        </div>
              <button type="submit" class="btn btn-primary btn-block">Enviar </button>
              
        </div>

      </div>
      @endif
      
    </div>
    
  </div>

@endsection