<!-- poner una condicional para extender, saber si admin o usuario con auth -->

@extends('usuario.ztemplate.layout')

@section('title','Modulo de Lecturas')

@section('contenido')
 <?php 
 	$meses = ['1' => 'Enero', '2' => 'Febrero', '3' => 'Marzo', '4' => 'Abril', '5' => 'Mayo', '6' => 'Junio', '7' => 'Julio', '8' => 'Agosto', '9' => 'Septiembre', '10' => 'Octubre',	'11' => 'Noviembre', '12' => 'Deciembre'];
 ?>
<div class="panel-buscador">
	{!! Form::open(['route' => 'user.lecturas.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
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
		<div class="row">
			{!! Form::label('nombre', 'NOMBRE', ['class' => 'col-md-4 control-label text-center']) !!}
			{!! Form::label('apellidoP', 'APELLIDO PATERNO', ['class' => 'col-md-4 control-label text-center']) !!}
			{!! Form::label('apellidoM', 'APELLIDO MATERNO', ['class' => 'col-md-4 control-label text-center']) !!}
		</div>
		
		<div class="row" style="margin-bottom:15px">
			<div class="col-md-4">
				{!! Form::text('nombre', $socio->nombre,['class' => 'form-control text-center', 'placeholder' => '','disabled']) !!}
			</div>
			<div class="col-md-4">
				{!! Form::text('apellidoP', $socio->apellidoP,['class' => 'form-control text-center', 'placeholder' => '','disabled']) !!}
			</div>
			<div class="col-md-4">
				{!! Form::text('apellidoM', $socio->apellidoM,['class' => 'form-control text-center', 'placeholder' => '','disabled']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('ci', 'C. I.', ['class' => 'col-md-2 control-label text-center']) !!}
			<div class="col-md-2">
				{!! Form::text('ci',$socio->ci.' '.$socio->ciExpedido, ['class' => 'form-control', 'placeholder' => '0000000','disabled']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('tipo', 'Tipo', ['class' => 'col-md-2 control-label text-center']) !!}
			<div class="col-md-2">
				{!! Form::text('tipo', $socio->tipo,['class' => 'form-control', 'placeholder' => '','disabled']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('estado', 'Estado', ['class' => 'col-md-2 control-label text-center']) !!}
			<div class="col-md-2">
				{!! Form::text('estado', $socio->estado,['class' => 'form-control', 'placeholder' => '','disabled']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('telefono', 'Telefono', ['class' => 'col-md-2 control-label text-center']) !!}
			<div class="col-md-2">
				{!! Form::text('Telefono', $socio->telefono,['class' => 'form-control', 'placeholder' => '','disabled']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('celular', 'Celular', ['class' => 'col-md-2 control-label text-center']) !!}
			<div class="col-md-2">
				{!! Form::text('celular', $socio->celular,['class' => 'form-control', 'placeholder' => '','disabled']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('direccion', 'Direcci&oacute;n', ['class' => 'col-md-2 control-label text-center']) !!}
			<div class="col-md-2">
				{!! Form::text('direcion', $socio->direccion,['class' => 'form-control', 'placeholder' => '']) !!}
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
							<th>A&ntilde;o</th>
							<th>Mtrs<sup>3</sup></th>
							<th>Fecha Lectura</th>
							<th>Fecha Cobro</th>
						</tr>
		        	</thead>
					<tbody>
						<?php $i = 1; ?>
						@foreach($lecturasAnteriores as $lecturaAnterior)
							<tr>
								<td> {{ $i }} </td>
								<td> {{ $meses[$lecturaAnterior->mes] }} </td>
								<td> {{ $lecturaAnterior->anio }} </td>
								<td> {{ $lecturaAnterior->lectura }}</td>
								<td> {{ $lecturaAnterior->created_at }}</td>
								<td> {{ $lecturaAnterior->updated_at }}</td>
							</tr>
							<?php $i++; ?>
						@endforeach
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
							<th>A&ntilde;o</th>
							<th>Mtrs<sup>3</sup></th>
							<th>Fecha Lectura</th>
							<th>Monto Bs</th>
							<th>Detalle</th>
						</tr>
		        	</thead>
					<tbody>
						
							{!! $i = 1 !!}

						@if($lecturasAnteriores->last())
							
						@else
							@foreach($lecturasActuales as $lecturaActual)
								<tr>
									<td> {{ $i }} </td>
									<td> {{ $meses[$lecturaActual->mes] }} </td>
									<td> {{ $lecturaActual->anio }} </td>
									<td> {{ $lecturaActual->lectura }} </td>
									<td> {{ $lecturaActual->created_at }}</td>
									
										@if($lecturasAnteriores->last())
											$primerMonto = (($lecturaActual->lectura - $socio->agua->lecturaMe) * $tarifa->montoBs) / $tarifa->montoMts3;
											<td> {{ $primerMonto }} </td>
										@else
											$ultimoMonto = (($lecturaActual->lectura) * $tarifa->montoBs) / $tarifa->montoMts3;
											<td> {{  }} </td>
										@endif
									
								</tr>
								<?php $i++; ?>
							@endforeach
						@endif
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
						<label class=" col-md-2 col-md-offset-2 control-label">Nueva Lectura</label>
						<div class="col-md-5">
							<input type="text" class="form-control" id="estado" placeholder="">
						</div>
					</div>
				</div>
				<div class="row">&nbsp;</div>
				<div class="row-fluid">
					<div class="form-group">
						<label class=" col-md-2 col-md-offset-2 control-label">Mes</label>
						<div class="col-md-3">
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
