@extends('administrador.ztemplate.layout')

@section('title','Modificar tarifa ' . $tarifa->nombre)

@section('contenido')
<?php 
	$meses = ['1' => 'Enero', '2' => 'Febrero', '3' => 'Marzo', '4' => 'Abril', '5' => 'Mayo', '6' => 'Junio', '7' => 'Julio', '8' => 'Agosto', '9' => 'Septiembre', '10' => 'Octubre',	'11' => 'Noviembre', '12' => 'Deciembre']; 
	$anios = ['2016' => '2016', '2017' => '2017'];
?>
	{!! Form::open(['route' => ['admin.tarifas.update', $tarifa], 'method' => 'PUT']) !!} <!-- , 'files' => true -->
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre Tarifa') !!}
			{!! Form::text('nombre', $tarifa->nombre, ['class' => 'form-control', 'placeholder' => 'Tarifa', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('categoria', 'Categoria') !!}
			{!! Form::select('categoria_id', $categorias, $tarifa->categoria->id, ['class' => 'form-control', 'placeholder' => 'Seleccione una categor&iacute;a', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('montoMts3', 'Monto Mts3') !!}
			{!! Form::text('montoMts3', $tarifa->montoMts3, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('montoBs', 'Monto Bs') !!}
			{!! Form::text('montoBs', $tarifa->montoBs, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('consumoMinimo', 'consumo Minimo') !!}
			{!! Form::text('consumoMinimo', $tarifa->consumoMinimo, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('mesIni', 'Mes Inicial') !!}
			{!! Form::select('mesIni', $meses, $tarifa->mesIni, ['class' => 'form-control', 'placeholder' => 'Seleccione mes inicial', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('mesFin', 'Mes Final') !!}
			{!! Form::select('mesFin',$meses, $tarifa->mesFin, ['class' => 'form-control','placeholder' => 'Seleccione mes final' 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('anio', 'Gesti&oacute;n') !!}
			{!! Form::select('anio', $anios, $tarifa->anio, ['class' => 'form-control','placeholder' => 'Seleccione gesti&oacute;n', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection