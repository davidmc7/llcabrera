@extends('users.template.main')
@section('title','Lecturar')
@section('usuario')
<p>david</p>
@endsection
@section('submenu')
<p>submenu</p>
@endsection
@section('content')
<div class="jumbotron">
	<div class="row">
		<h2>Realizar Lectura</h2>

		<form class="navbar-form" role="Codigo de Socio">
	    	<button type="submit" class="pull-right btn btn-default">Buscar</button>
	    	<input type="text" class="pull-right form-control" placeholder="Codigo de Socio">
		</form>	
	</div>
	
	<fieldset>
		<legend>Datos socio</legend>	
		<div class="row-fluid">
			<div class="form-group">
				<label class="col-xs-2 control-label text-center">C.I.</label>
				<div class="col-xs-2">
					<input type="text" class="form-control" id="ci" placeholder="" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-2 control-label text-center">Tipo</label>
				<div class="col-xs-2">
					<input type="text" class="form-control" id="tipo" placeholder="" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class=" col-xs-2 control-label text-center">Estado</label>
				<div class="col-xs-2">
					<input type="text" class="form-control" id="estado" placeholder="" disabled>
				</div>
			</div>
		</div>
		<div class="row">&nbsp;</div>
		<div class="row-fluid">
			<div class="form-group">
				<label class="col-xs-2 control-label text-center">Telefono</label>
				<div class="col-xs-2">
					<input type="text" class="form-control" id="ci" placeholder="" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-2 control-label text-center">Celular</label>
				<div class="col-xs-2">
					<input type="text" class="form-control" id="tipo" placeholder="" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class=" col-xs-2 control-label text-center">Direccion</label>
				<div class="col-xs-2">
					<input type="text" class="form-control" id="estado" placeholder="">
				</div>
			</div>
		</div>		
	</fieldset>
	<br>
	<fieldset>
		<legend>Historial de Lecturas</legend>
		<div class="table-responsive">
			<table class="table table-striped table-hover table-condensed">
				<thead>
					<tr>
						<th>Nº</th>
						<th>Mes</th>
						<th>Nº Lectura</th>
						<th>Consumo ms<sup>3</sup></th>
						<th>Fecha Lectura</th>
						<th>Monto Bs</th>
					</tr>
	        	</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>	
	</fieldset>
	<br>
	<form action="">
	<fieldset>
		<legend>Lecturas Pendientes</legend>
		<div class="table-responsive">
			<table class="table table-striped table-hover table-condensed">
				<thead>
					<tr>
						<th>Nº</th>
						<th>Mes</th>
						<th>Nº Lectura</th>
						<th>Consumo ms<sup>3</sup></th>
						<th>Fecha Lectura</th>
						<th>Monto Bs</th>
						<th>Detalle</th>
					</tr>
	        	</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>	
	</fieldset>
	<br>
		<fieldset>
			<legend>Registrar Lectura</legend>
			<div class="row-fluid">
				<div class="form-group">
					<label class=" col-xs-2 col-xs-offset-2 control-label">Nueva Lectura</label>
					<div class="col-xs-5">
						<input type="text" class="form-control" id="estado" placeholder="">
					</div>
				</div>
			</div>
			<div class="row">&nbsp;</div>
			<div class="row-fluid">
				<div class="form-group">
					<label class=" col-xs-2 col-xs-offset-2 control-label">Mes</label>
					<div class="col-xs-3">
						<select class="form-control" name="mes" id="mes" placeholder="Mes">
							<option id="1" value="ENERO">Enero</option>
							<option id="2" value="FEBRERO">Febrero</option>
							<option id="3" value="MARZO">Marzo</option>
							<option id="4" value="ABRIL">Abril</option>
							<option id="5" value="MAYO">Mayo</option>
							<option id="6" value="JUNIO">Junio</option>
							<option id="7" value="JULIO">Julio</option>
							<option id="8" value="AGOSTO">Agosto</option>
							<option id="9" value="SEPTIEMBRE">Septiembre</option>
							<option id="10" value="OCTUBRE">Octubre</option>
							<option id="11" value="NOVIEMBRE">Noviembre</option>
							<option id="12" value="DICIEMBRE">Diciembre</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">&nbsp;</div>
			<div class="row-fluid">
				<div class="col-xs-3 col-xs-offset-6">
					<div class="form-group">
						<input type="submit" class="pull-right btn btn-success" value="Realizar Lectura">
					</div>
				</div>
			</div>
		</fieldset>
	</form>
</div>
@endsection