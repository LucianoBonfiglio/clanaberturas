@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('favicon.png') }}" rel="icon" type="image/x-icon"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Viva la Birra</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src={{ asset('js/scripts.js') }}></script>
</head>
<body>
<script>
function sumar() {
var n1 = parseInt(document.venta.cantidad.value);
var n2 = parseInt(document.venta.precio.value);
document.venta.resultado.value=n1*n2;
}
</script>
<div class="container">
<form action="{{URL::to('agregarventa')}}" method="POST" name="venta" enctype="multipart/form-data">
	{{csrf_field()}}
	  <div>
	    <label for="dnif"></label><br>
      </div>
      <div class="input">
	  <label for="cliente">Seleccionar Cliente:</label>
	  <select id="cliente" class="form-control" name="cliente" value="{{old('cliente')}}">
	  	<option value="" selected disabled hidden>Seleccione</option>
		  @foreach ($clientes as $cliente)
			<option value="{{$cliente->nombre}}">{{$cliente->nombre}} {{$cliente->apellido}}</option>
			@endforeach>
      </select>
	  </div>
      <div class="input">
	  <label for="producto">Seleccionar Producto:</label>
	  <select id="producto" class="form-control" name="producto" value="{{old('producto')}}">
	  	<option value="" selected disabled hidden>Seleccione</option>
		  	@foreach ($productos as $producto)
			<option value="{{$producto->nombre}}">{{$producto->nombre}}</option>
			@endforeach
      </select>
      </div>
      <div class="input">
	    <label for="cantidad">Cantidad:</label>
	    <input type="number" id="cantidad" name="cantidad" class="form-control" onchange="sumar();">
      </div>
      <div class="input">
	    <label for="precio">Precio:</label>
	    <input type="float" id="precio" name="precio" class="form-control" onchange="sumar();">
      </div>
        <div class="input">
        <label for="total">Total:</label>
        <input type="text" class="form-control" id="resultado" name="resultado" readonly=readonly>
      </div>
      <div class="input">
	  <label for="entregado">Entregado:</label>
	  <select id="entregado" class="form-control" name="entregado" value="{{old('entregado')}}">
	  	<option value="" selected disabled hidden>Seleccione</option>
    	<option value = "Si">Si</option>
		<option value = "No">No</option>
      </select>
      </div>
      <div class="input">
	  <label for="abonado">Abonado:</label>
	  <select id="abonado" class="form-control" name="abonado" value="{{old('abonado')}}">
	  	<option value="" selected disabled hidden>Seleccione</option>
    	<option value = "Si">Si</option>
		<option value = "No">No</option>
      </select>
      </div>
      <div>
	    <button type="submit" class="btn btn-primary">Enviar</button>
	  </div>
	</form>    
</div> 
</body>
</html>