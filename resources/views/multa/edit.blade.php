@extends('layouts.master')

@section('title','Modificar multa ' . $multa->nombre)

@section('content')
<?php 
	$meses = ['1' => 'Enero', '2' => 'Febrero', '3' => 'Marzo', '4' => 'Abril', '5' => 'Mayo', '6' => 'Junio', '7' => 'Julio', '8' => 'Agosto', '9' => 'Septiembre', '10' => 'Octubre',	'11' => 'Noviembre', '12' => 'Deciembre']; 
	$anios = ['2016' => '2016', '2017' => '2017'];
?>
	{!! Form::open(['route' => ['multas.update', $multa], 'method' => 'PUT']) !!} <!-- , 'files' => true -->
		<div class="form-group">
			{!! Form::label('categoria', 'Categoria') !!}
			{!! Form::select('categoria_id', $categorias, $multa->categoria_id, ['class' => 'form-control', 'placeholder' => 'Seleccione una categor&iacute;a', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('estado', 'Estado') !!}
			{!! Form::select('estado', $estado, $multa->estado, ['class' => 'form-control', 'placeholder' => 'Seleccione un estado', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('meses', 'N&uacute;mero Meses') !!}
			{!! Form::text('meses', $multa->meses, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('multa', 'Multa Bs.') !!}
			{!! Form::text('multa', $multa->multa, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('porcentaje', 'Porcentaje (0 - 100)') !!}
			{!! Form::text('porcentaje', $multa->porcentaje, ['class' => 'form-control', 'placeholder' => '0,00']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion', 'Descripcion') !!}
			{!! Form::textarea('descripcion', $multa->descripcion, ['class' => 'form-control', 'placeholder' => 'Descripcion de la multa', 'rows' => '4']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary']) !!}
			{{ Form::hidden('_token', Session::token()) }}
		</div>
	{!! Form::close() !!}
@endsection