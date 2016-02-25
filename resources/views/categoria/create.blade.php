@extends('layouts.master')

@section('title','Crear categoria')

@section('content')

{!! Form::open(['route' => 'categorias.store', 'method' => 'POST']) !!} <!-- , 'files' => true -->
	<div class="form-group">
		{!! Form::label('nombre', 'Nombre Categoria') !!}
		{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Categoria A', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('mtrs3', 'Metros Cubicos') !!}
		{!! Form::text('mtrs3', null, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('monto', 'Monto') !!}
		{!! Form::text('monto', null, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('montoMinimo', 'Monto Minimo') !!}
		{!! Form::text('montoMinimo', null, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('mesesRetraso', 'Meses Retraso') !!}
		{!! Form::text('mesesRetraso', null, ['class' => 'form-control', 'placeholder' => '0', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('descripcion', 'Descripcion') !!}
		{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Nuevo Categoria', 'rows' => '4']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Crear Categoria', ['class' => 'btn btn-primary']) !!}
		{{ Form::hidden('_token', Session::token()) }}
	</div>
{!! Form::close() !!}
@endsection