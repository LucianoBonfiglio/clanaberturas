<form action="{{URL::to('agregarproducto')}}" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	  <div>
	  <h3><label>Cargar un nuevo Producto</label><br></h3>
      </div>
      <div class="input">
	    <label for="nombreproducto">Nombre:</label>
	    <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}">
      </div>
      <div class="input">
	  <label for="categoria">Seleccionar Categoria:</label>
	  <select id="categoria" class="form-control" name="categoria" value="{{old('categoria')}}">
	  	<option value="" selected disabled hidden>Seleccione</option>
			@foreach ($categorias as $categoria)
			<option value="{{$categoria->nombre}}">{{$categoria->nombre}}</option>
			@endforeach
      </select>
      </div>
	  <div class="input">
	    <label for="stockproducto">Stock:</label>
	    <input type="text" class="form-control" id="stock" name="stock" value="{{old('stock')}}">
      </div>
      <br>
      <div>
	    <button type="submit" class="btn btn-primary">Enviar</button>
	  </div>
	</form>    
</div> 
</body>
</html>