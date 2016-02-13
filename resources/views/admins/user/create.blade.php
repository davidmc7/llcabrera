@extends('admins.template.main')

@section('title','Crear Usuarios')

@section('content')
	<div class="jumbotron">
		<h2>Crear nuevo usuario</h2>
		
		<form class="form-horizontal" role="form" method="post" action="">
			<div class="col-xs-offset-4">
				<div class="form-group">
					<label for="" class="control-label col-xs-4">Login</label>
					<div class="col-xs-4">
						<input type="text" class="form-control" id="" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-xs-4">Contrase&ntilde;a</label>
					<div class="col-xs-4">
						<input type="text" class="form-control" id="" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-xs-4">Repita la Contrase&ntilde;a</label>
					<div class="col-xs-4">
						<input type="text" class="form-control" id="" placeholder="">
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-xs-3">Nombre Completo</label>
				<div class="col-xs-3">
					<input type="text" class="form-control" id="nombre" placeholder="Nombre">
				</div>
				<div class="col-xs-3">
					<input type="text" class="form-control" id="apellidoP" placeholder="Apellido Paterno">
				</div>
				<div class="col-xs-3">
					<input type="text" class="form-control" id="apellidoM" placeholder="Apellido Materno">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-xs-3">C.I.</label>
				<div class="col-xs-3">
					<input type="text" class="form-control text-inline" id="ci" placeholder="Numero de Carnet">
				</div>
				<div class="col-xs-3">
					<select class="form-control" name="expedido" id="expedido" placeholder="Expedido">
						<option value="COCHABAMBA">Cochabamba</option>
						<option value="ORURO">Oruro</option>
						<option value="LA PAZ">La Paz</option>
						<option value="SANTA CRUZ">Santa Cruz</option>
						<option value="BENI">Beni</option>
						<option value="PANDO">Pando</option>
						<option value="TARIJA">Tarija</option>
						<option value="CHUQUISACA">Chuquisaca</option>
						<option value="POTOSI">Potosi</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-xs-3">Email</label>
				<div class="col-xs-9">
					<input type="email" class="form-control" id="email" placeholder="ejemplo@cabrera.com">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-xs-3">Telefono</label>
				<div class="col-xs-9">
					<input type="text" class="form-control" id="" placeholder="">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-xs-3">Celular</label>
				<div class="col-xs-9">
					<input type="text" class="form-control" id="" placeholder="">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-xs-3">Direcci&oacute;n</label>
				<div class="col-xs-9">
					<input type="text" class="form-control" id="" placeholder="">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-xs-3">Fotografia</label>
				<div class="col-xs-9">
					<input type="file" class="btn btn-default btn-file" id="" placeholder="">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-xs-3">Tipo</label>
				<div class="col-xs-3">
					<select class="form-control" name="tipo" id="tipo" placeholder="Usuario">
						<option value="USUARIO">Usuario</option>
						<option value="ADMINISTRADOR">Administrador</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
	        	<div class="col-xs-offset-3 col-xs-9">
	            	<button type="submit" class="btn btn-primary">Guardar</button>
	            </div>
	        </div>
		</form>
	</div>
@endsection