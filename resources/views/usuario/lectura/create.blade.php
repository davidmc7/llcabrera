<!-- poner una condicional para extender, saber si admin o usuario con auth -->
@extends('usuario.ztemplate.layout')

@section('title','Crear nueva lectura')

@section('contenido')

<div class="panel-buscador">
	{!! Form::open(['route' => 'user.lecturas.create', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
		<div class="input-group">
			{!! Form::text('socio_id', null, ['class' => 'form-control', 'placeholder' => 'Buscar socio...', 'aria-describedby' => 'buscar']) !!}
			<span class="input-group-addon" id="buscar"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
		</div>
	{!! Form::close() !!}
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h4 class="panel-title">
				Datos Socio
		</h4>
	</div>
	<div class="panel-body">
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
</div>

{!! Form::open(['route' => 'user.socios.store', 'method' => 'POST']) !!} <!-- , 'files' => true -->
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	<div class="panel panel-primary">
		<div class="panel-heading" role="tab" id="headingUno">
			<h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseUno" aria-expanded="true" aria-controls="collapseUno">
					<i class="maximizar glyphicon glyphicon-chevron-up pull-right"></i>
					Historial de Lecturas
				</a>
			</h4>
		</div>
		<div id="collapseUno" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingUno">
			<div class="panel-body">
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
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading" role="tab" id="headingDos">
			<h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseDos" aria-expanded="true" aria-controls="collapseDos">
					<i class="maximizar glyphicon glyphicon-chevron-down pull-right"></i>
					Lecturas Pendientes
				</a>
			</h4>
		</div>
		<div id="collapseDos" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingDos">
			<div class="panel-body">
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
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading" role="tab" id="headingUno">
			<h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTres" aria-expanded="true" aria-controls="collapseTres">
					<i class="maximizar glyphicon glyphicon-chevron-down pull-right"></i>
					Registrar Lectura
				</a>
			</h4>
		</div>
		<div id="collapseTres" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingUno">
			<div class="panel-body">
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
			</div>
		</div>
	</div>
</div>
	<div class="form-group pull-right">
		{!! Form::submit('Registrar Lectura', ['class' => 'btn btn-danger']) !!}
	</div>
{!! Form::close() !!}

@endsection
