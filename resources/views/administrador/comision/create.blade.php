@extends('administrador.ztemplate.layout')

@section('title','Crear Comision')

@section('contenido')
	{!! Form::open(['route' => 'admin.comisiones.store', 'method' => 'POST']) !!} <!-- , 'files' => true -->
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre Comisi&oacute;n') !!}
			{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Aporte', 'required']) !!}
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
		</div>
	{!! Form::close() !!}
@endsection