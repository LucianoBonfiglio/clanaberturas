<script type="text/javascript">
		$(document).ready(function() {
		$("#compra").click(function(event) {
					$("#capa2").load('compra');
                });
        $("#venta").click(function(event) {
					$("#capa2").load('venta');
                });        
        $("#cliente").click(function(event) {
					$("#capa2").load('cliente');
				});
        $("#producto").click(function(event) {
					$("#capa2").load('producto');
                });
        $("#categoria").click(function(event) {
					$("#capa2").load('categoria');
				});        
			});
</script>
<br>
<div class="row">    
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div id="menulateral">  
                <h2>MENU AGREGAR</h2>
            </div>
            <div id="menulateral">  
                <button type="button" id="compra" class="btn btn-primary">AGREGAR COMPRA</button>
            </div><br>
            <div id="menulateral">  
                <button type="button" id="venta" class="btn btn-primary">AGREGAR VENTA</button>
            </div><br>
            <div id="menulateral">  
                <button type="button" id="cliente" class="btn btn-primary">AGREGAR CLIENTE</button>
            </div><br>
            <div id="menulateral">  
                <button type="button" id="producto" class="btn btn-primary">AGREGAR PRODUCTO</button>
            </div><br>
            <div id="menulateral">  
                <button type="button" id="categoria" class="btn btn-primary">AGREGAR CATEGORIA</button>
            </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div id="capa2"></div>
    </div>   
</div> 


