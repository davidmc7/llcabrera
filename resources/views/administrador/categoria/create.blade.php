@extends('administrador.ztemplate.layout')

@section('title','Crear categoria')

@section('contenido')

{!! Form::open(['route' => 'admin.categorias.store', 'method' => 'POST']) !!} <!-- , 'files' => true -->
	<div class="form-group">
		{!! Form::label('nombre', 'Nombre Categoria') !!}
		{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Categoria A', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('descripcion', 'Descripcion') !!}
		{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Nuevo Categoria', 'rows' => '4']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Crear Categoria', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
@endsection