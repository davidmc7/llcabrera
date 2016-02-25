@extends('layouts.master')

@section('title','Modificar categoria ' . $categoria->nombre)

@section('content')

{!! Form::open(['route' => ['categorias.update', $categoria], 'method' => 'PUT']) !!} <!-- , 'files' => true -->
	<div class="form-group">
		{!! Form::label('nombre', 'Nombre Categoria') !!}
		{!! Form::text('nombre', $categoria->nombre, ['class' => 'form-control', 'placeholder' => 'Categoria A', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('mts3', 'Metros Cubicos') !!}
		{!! Form::text('mts3', $categoria->mtrs3, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('monto', 'Monto') !!}
		{!! Form::text('monto', $categoria->monto, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('montoMinimo', 'Monto Minimo') !!}
		{!! Form::text('montoMinimo', $categoria->montoMinimo, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('mesesRetraso', 'Meses Retraso') !!}
		{!! Form::text('mesesRetraso', $categoria->mesesRetraso, ['class' => 'form-control', 'placeholder' => '0', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('descripcion', 'Descripcion') !!}
		{!! Form::textarea('descripcion', $categoria->descripcion, ['class' => 'form-control', 'placeholder' => 'Nuevo Categoria o Tambien categoria', 'rows' => '4']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary']) !!}
		{{ Form::hidden('_token', Session::token()) }}
	</div>
{!! Form::close() !!}
@endsection