@extends('admins.template.main')

@section('title','Crear Tipos de Socios')

@section('content')


<div class="jumbotron">
		<h2>Crear nuevo tipo de socio</h2>
		
		<form class="form-horizontal" role="form" method="post" action="">
			<div class="form-group">
				<label class="control-label col-xs-4">Nombre de Tipo Socio</label>
				<div class="col-xs-6">
					<input type="text" class="form-control" id="nombre" placeholder="Socio X">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-xs-4">Descripci&oacute;n</label>
				<div class="col-xs-6">
					<input type="textarea" class="form-control" id="desripcion" placeholder="">
				</div>
			</div>
			<div class="form-group">
	        	<div class="col-xs-offset-4 col-xs-6">
	            	<button type="submit" class="btn btn-primary">Guardar</button>
	            </div>
	        </div>
		</form>
</div>


@endsection