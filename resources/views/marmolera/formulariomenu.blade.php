<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	@yield('cssextra')
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="/css/bootstrap.css" rel="stylesheet">
        <script src="/js/bootstrap.js"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/alertify.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<style type="text/css">
  .card{
    float : left;
  height : 450px;
  width : 255px;
  font-size: 90%;
  }
</style>
<body>
  <div class="container">
  <div class="card-deck">
	<div class="row">
    <!-- <div class="col-sm12"> -->
      <div class="card">
        <br>
        <div class="card-image" align="center">
          <img src="cf0c61c0-3abe-464d-b073-8d1d9b1a962f.jpg" style="height: 200px; width: 200px">
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">Venta producto</a>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".btn1">img</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="modal modal-dialog modal-lg btn1" style="margin-top: -38%; width: 550px">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <img src="cf0c61c0-3abe-464d-b073-8d1d9b1a962f.jpg" style="height: 650px; width:500px">
    </div>
  </div>
</div>
	@yield('contenido')
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="/js/bootstrap.js"></script>
	@yield('javascript')
</body>
</html>