  <form action="{{URL::to('agregarcliente')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
      <div>
          <h3><label>Cargar un nuevo Cliente</label><br></h3>
        </div>
        <div class="input">
          <label>Nombre:</label>
          <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}">
        </div><br>
        <div>
          <label for="apellido">Apellido:</label>
          <input type="text" id="apellido" name="apellido" value="{{old('apellido')}}">
        </div><br>
        <div>
          <label>Teléfono:</label>
          <input type="number" id="telefono" name="telefono" value="{{old('telefono')}}">
        </div>
        <div><br>
          <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
  </form>    