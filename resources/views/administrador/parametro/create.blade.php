@extends('administrador.ztemplate.layout')

@section('title','Parametros')

@section('content')

<div class="jumbotron">
		<h2>Configuracion de Parametros</h2>
		<form class="form-horizontal" role="form" method="post" action="">
			<div class="form-group">
				<label class="control-label col-xs-4">Nombre Sistema</label>
				<div class="col-xs-6">
					<input type="text" class="form-control" id="nombre" placeholder="Cabrera APP">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-4">Gestion</label>
				<div class="col-xs-6">
					<input type="text" class="form-control" id="nombre" placeholder="2016">
				</div>
			</div>




			<div class="form-group">
	        	<div class="col-xs-offset-4 col-xs-6">
	        		<input type="submit" class="btn btn-primary" value="Guardar Cambios">
	            </div>
	        </div>
		</form>
</div>
@endsection