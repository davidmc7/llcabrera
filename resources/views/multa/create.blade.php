@extends('layouts.master')

@section('title','Crear Multa')

@section('content')
	{!! Form::open(['route' => 'multas.store', 'method' => 'POST']) !!} <!-- , 'files' => true -->
		<div class="form-group">
			{!! Form::label('categoria', 'Categoria') !!}
			{!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una categor&iacute;a', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('estado', 'Estado') !!}
			{!! Form::select('estado', $estado, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un estado', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('meses', 'N&uacute;mero Meses') !!}
			{!! Form::text('meses', null, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('multa', 'Multa Bs.') !!}
			{!! Form::text('multa', null, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('porcetnaje', 'Porcentaje (0 - 100)') !!}
			{!! Form::text('porcentaje', null, ['class' => 'form-control', 'placeholder' => '0,00']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion', 'Descripcion') !!}
			{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripcion de la multa', 'rows' => '4']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Crear Multa', ['class' => 'btn btn-primary']) !!}
			{{ Form::hidden('_token', Session::token()) }}
		</div>
	{!! Form::close() !!}
@endsection