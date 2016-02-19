@extends('administrador.ztemplate.layout')

@section('title','Crear Tarifa')

@section('contenido')
<?php 
	$meses = ['1' => 'Enero', '2' => 'Febrero', '3' => 'Marzo', '4' => 'Abril', '5' => 'Mayo', '6' => 'Junio', '7' => 'Julio', '8' => 'Agosto', '9' => 'Septiembre', '10' => 'Octubre',	'11' => 'Noviembre', '12' => 'Deciembre'];
	$anios = ['2016' => '2016', '2017' => '2017'];
?>

	{!! Form::open(['route' => 'admin.tarifas.store', 'method' => 'POST']) !!} <!-- , 'files' => true -->
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre Tarifa') !!}
			{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Tarifa', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('categoria', 'Categoria') !!}
			{!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una categor&iacute;a', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('montoMts3', 'Monto Mts3') !!}
			{!! Form::text('montoMts3', null, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('montoBs', 'Monto Bs') !!}
			{!! Form::text('montoBs', null, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('consumoMinimo', 'consumo Minimo') !!}
			{!! Form::text('consumoMinimo', null, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('mesIni', 'Mes Inicial') !!}
			{!! Form::select('mesIni', ['' => 'Seleccione mes inicial'] + $meses, null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('mesFin', 'Mes Final') !!}
			{!! Form::select('mesFin', ['' => 'Seleccione mes final'] + $meses, null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('anio', 'Gesti&oacute;n') !!}
			{!! Form::select('anio', ['' => 'Seleccione gesti&oacute;n'] + $anios, null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Crear Tarifa', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection