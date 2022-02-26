<form action="{{URL::to('agregarcategoria')}}" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	  <div>
	  <h3><label>Cargar una nueva Categoria</label><br></h3>
      </div>
      <div class="input">
	    <label for="nombrecategoria">Nombre:</label>
	    <input type="text" class="form-control" id="nombrecategoria" name="nombrecategoria" value="{{old('nombrecategoria')}}">
      </div>
      <br>
      <div>
	    <button type="submit" class="btn btn-primary">Enviar</button>
	  </div>
	</form>    
