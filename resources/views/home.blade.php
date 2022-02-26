@extends('layouts.app')
@section('content')
<script type="text/javascript">
	$(document).ready(function() {
	$("#agregar").click(function(event) {
				$("#capa").load('agregar');
            });
    $("#consultar").click(function(event) {
				$("#capa").load('consultar');
            });        
		});
</script>
</div>    
    @foreach ($errors->all() as $error)
        <li>
            {{$error}}
        </li>
    @endforeach	

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div id="menulateral">  
                <button type="button" id="agregar" class="btn btn-primary">AGREGAR</button>
            </div>
        </div>  
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div id="menulateral">  
                <button type="button" id="consultar" class="btn btn-primary">CONSULTAR</button>
            </div>
        </div>    
    </div>
    <div class="row">    
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="capa"></div>
        </div> 
    </div>    
@endsection
