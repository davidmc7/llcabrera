@extends('layouts.master')

@section('title','Crear Comision')

@section('content')
	{!! Form::open(['route' => 'comisiones.store', 'method' => 'POST']) !!} <!-- , 'files' => true -->
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre Comisi&oacute;n') !!}
			{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Comision X', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('estado', 'Estado') !!}
			{!! Form::select('estado', $estado, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un estado', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('monto', 'Monto') !!}
			{!! Form::text('monto', null, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('categoria', 'Categoria') !!}
			{!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una categor&iacute;a', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion', 'Descripcion') !!}
			{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Nuevo comisi&oacute;n', 'rows' => '4']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Crear Comisi&oacute;n', ['class' => 'btn btn-primary']) !!}
			{{ Form::hidden('_token', Session::token()) }}
		</div>
	{!! Form::close() !!}
@endsection