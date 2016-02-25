@extends('layouts.master')
@section('title','Cobrar')
@section('usuario')
<p>david</p>
@endsection
@section('submenu')
<p>submenu</p>
@endsection
@section('content')
<div class="jumbotron">
	<div class="row">
		<h2>Realizar Cobro</h2>

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
		<br>
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
						<th>Cobrar</th>
					</tr>
	        	</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>	
	</fieldset>
		
	<div class="form-group">
		<input type="submit" class="pull-right btn btn-success" value="Realizar Cobro">
	</div>
	</form>
</div>
@endsection