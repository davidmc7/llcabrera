@extends('layouts.master')

@section('title','Modulo de Lecturas')

@section('content')
<div class="panel-buscador">
	{!! Form::open(['route' => 'lecturas.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
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
				{!! Form::text('estado', $estado[$socio->estado],['class' => 'form-control', 'placeholder' => '','disabled']) !!}
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
						<?php $i = 1; $primeraLectura = 0;?>

						<!-- Condicional para la PRIMERA LECTURA -->
							@if(count($lecturasAnteriores->first()) == 1)
								<?php $primeraLectura = 1; ?>
								<tr>
									<td>{{ $i }}</td>
									<td>{{ $meses[date('n',strtotime($socio->agua->created_at))] }}</td>
									<td>{{ date('Y',strtotime($socio->agua->created_at)) }}</td>
									<td>{{ $socio->agua->lecturaMe }}</td>
									<td>{{ $socio->agua->fechaConexion }}</td>
									<td>{{ date('j-M-Y',strtotime($socio->agua->created_at)) }}</td>
								</tr>
							@endif
						<!-- Fin de la primera LECTURA -->

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
							<th>Cobrar</th>
						</tr>
		        	</thead>
					<tbody>
						
						<?php 
							$i = 1;
							
						?>


						@foreach($lecturasActuales as $lecturaActual)
							<tr>
								<td> {{ $i }} </td>
								<td> {{ $meses[$lecturaActual->mes] }} </td>
								<td> {{ $lecturaActual->anio }} </td>
								<td> {{ $lecturaActual->lectura }} </td>
								<td> {{ $lecturaActual->created_at }}</td>
								<?php
									$montos = explode(' ', $lecturaActual->montos);
									$cobrar = 0;

									foreach ($montos as $key => $monto) {//number_format($cobrar, 2);
										$cobrar += floatval($monto);
									}
								?>
								<td>{{ $cobrar }}</td>
								<td><a href="#">Detalle</a></td>
							</tr>
							<?php $i++; ?>
						@endforeach
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
		{!! Form::open(['route' => 'lecturas.store', 'method' => 'POST']) !!}
			{{ Form::hidden('socio_id', $socio->id) }}
			{{ Form::hidden('categoria_id', $socio->categoria_id) }}
			{{ Form::hidden('primeraLectura', $primeraLectura) }}
		<div id="collapseTres" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingUno">
			<div class="panel-body">
				<div class="form-group">
					{!! Form::label('nuevalectura', 'Nueva Lectura', ['class' => 'col-md-2 col-md-offset-2 control-label']) !!}
					<div class="col-md-5">
						{!! Form::text('lectura', null, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('mes', 'Mes', ['class' => 'col-md-2 col-md-offset-2 control-label']) !!}
					<div class="col-md-3">
						{!! Form::select('mes', $meses, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un mes', 'required']) !!}
					</div>
				</div>
				<div class="form-group col-md-4 col-md-offset-4">
					{!! Form::submit('Registrar Lectura', ['class' => 'btn btn-danger']) !!}
					{{ Form::hidden('_token', Session::token()) }}
				</div>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection
