@extends('administrador.ztemplate.layout')

@section('title','Modificar categoria ' . $categoria->nombre)

@section('contenido')

{!! Form::open(['route' => ['admin.categorias.update', $categoria], 'method' => 'PUT']) !!} <!-- , 'files' => true -->
	<div class="form-group">
		{!! Form::label('nombre', 'Nombre Categoria') !!}
		{!! Form::text('nombre', $categoria->nombre, ['class' => 'form-control', 'placeholder' => 'Categoria A', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('descripcion', 'Descripcion') !!}
		{!! Form::textarea('descripcion', $categoria->descripcion, ['class' => 'form-control', 'placeholder' => 'Nuevo Categoria o Tambien categoria', 'rows' => '4']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
@endsection