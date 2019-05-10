	@extends('baseMarmoleria')
@section('Contenido')
<br>
<br>
	<div class="row justify-content-md-center">
    <div style="width: 600px;">
      <div class="card">
      <div class="card-header">
        Actualizar Cliente
      </div>
      <div class="card-body">
        
           <form action="/saldocliente/{{ $popo[0]->id }}" method="POST">
        <div class="form-group">
          {{ csrf_field() }}
          <label for="SaldoInput"> Saldo </label>
          <input value="{{ $popo[0]->saldo_restante}}" name="saldo" type="text" class="form-control">
        </div>
           <button type="submit" class="btn btn-primary btn-block">Enviar </button>

      </div>
      </form>
    </div>
  </div>

@endsection