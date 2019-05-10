<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @yield('cssextra')
        <title>Colecciones</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="/css/bootstrap.css" rel="stylesheet">
        <script src="/js/bootstrap.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/series-label.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <!-- <script src="./path/to/dropzone.js"></script> -->
    </head>
    <style type="text/css">
    </style>
    <body style="background-color: #3339">
        <div class="container">
            <div class="card-body">
                <form method="POST" action="{{url("/graficas")}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="nombreinput">Nombre:</label>
                        <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Juan">
                    </div>
                    <div class="form-group">
                        <label for="nombreinput">Edad:</label>
                        <input name="edad" type="text" class="form-control" id="edad" placeholder="35">
                    </div>
                    <div class="form-group">
                        <label for="nombreinput">Sexo:</label>
                        <input name="sexo" type="text" class="form-control" id="sexo" placeholder="casual">
                    </div>
                    @if(Session::has("Mensaje"))
                    <div class="alert alert-info animated bounceInUp" role="alert">
                        <strong>{{Session::get("Mensaje")}}</strong>
                    </div>
                    @endif
                    <div>
                        <button type="submit" class="btn btn-outline-primary float-right">Enviar</button>
                    </div>
                </form>
                <form method="GET" action="{{url("/graficamesta")}}">
                    <button type="submit" class="btn btn-outline-primary float-right">Gráficas</button>
                </form>
            </div>
        </div>
    <script type="text/javascript">
    </script>
</html>