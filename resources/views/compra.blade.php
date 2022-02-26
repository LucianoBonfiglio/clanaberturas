
<script>
    function sumar() {
    var n1 = parseInt(document.compra.cantidad.value);
    var n2 = parseInt(document.compra.precio.value);
    document.compra.resultado.value=n1*n2;
    }
</script>
<div class="container">
<form action="{{URL::to('agregarcompra')}}" method="POST" name="compra" enctype="multipart/form-data">
	{{csrf_field()}}
	  <div>
    <h3><label>Cargar una nueva Compra</label><br></h3>
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
	    <label for="proveedor">Proveedor:</label>
	    <input type="float" class="form-control" id="proveedor" name="proveedor" value="{{old('proveedor')}}">
	  </div>
    <br>
      <div>
	    <button type="submit" class="btn btn-primary">Enviar</button>
	  </div>
	</form>    
</div> 
</body>
</html>