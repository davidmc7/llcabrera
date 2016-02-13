@extends('admins.template.main')

@section('title','Crear Aportes')

@section('content')


<div class="jumbotron">
		<h2>Crear nuevo aporte</h2>
		
		<form class="form-horizontal" role="form" method="post" action="">
			<div class="form-group">
				<label class="control-label col-xs-4">Nombre del Aporte</label>
				<div class="col-xs-6">
					<input type="text" class="form-control" id="nombre" placeholder="Aporte">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-4">Monto</label>
				<div class="col-xs-6">
					<input type="text" class="form-control" id="monto" placeholder="0">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-xs-4">Descripci&oacute;n</label>
				<div class="col-xs-6">
					<textarea name="" id="descripcion" rows="6" class="form-control">
						
					</textarea>
				</div>
			</div>
			<div class="form-group">
	        	<div class="col-xs-offset-4 col-xs-6">
	        		<input type="submit" class="btn btn-primary" value="Crear Nuevo Aporte">
	            </div>
	        </div>
		</form>
	</div>


@endsection