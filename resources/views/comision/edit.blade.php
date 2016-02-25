@extends('layouts.master')

@section('title','Modificar comision' . $comision->nombre)

@section('content')

	{!! Form::open(['route' => ['comisiones.update',$comision], 'method' => 'PUT']) !!} <!-- , 'files' => true -->
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre Comision') !!}
			{!! Form::text('nombre', strtolower(ucfirst($comision->nombre)), ['class' => 'form-control', 'placeholder' => 'Comision X', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('estado', 'Estado') !!}
			{!! Form::select('estado', $estado, $comision->estado, ['class' => 'form-control', 'placeholder' => 'Seleccione un estado', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('monto', 'Monto') !!}
			{!! Form::text('monto', $comision->monto, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('categoria', 'Categoria') !!}
			{!! Form::select('categoria_id', $categorias, $comision->categoria->id, ['class' => 'form-control', 'placeholder' => 'Seleccione una categor&iacute;a', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion', 'Descripcion') !!}
			{!! Form::textarea('descripcion', $comision->descripcion, ['class' => 'form-control', 'placeholder' => 'Editar comision', 'rows' => '4']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary']) !!}
			{{ Form::hidden('_token', Session::token()) }}
		</div>
	{!! Form::close() !!}
@endsection