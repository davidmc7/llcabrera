@extends('layouts.master')

@section('title','Modificar aporte' . $aporte->nombre)

@section('content')

	{!! Form::open(['route' => ['aportes.update', $aporte], 'method' => 'PUT']) !!} <!-- , 'files' => true -->
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre Aporte') !!}
			{!! Form::text('nombre', strtolower(ucfirst($aporte->nombre)), ['class' => 'form-control', 'placeholder' => 'Aporte', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('monto', 'Monto') !!}
			{!! Form::text('monto', $aporte->monto, ['class' => 'form-control', 'placeholder' => '0,00', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('categoria', 'Categoria') !!}
			{!! Form::select('categoria_id', $categorias, $aporte->categoria->id, ['class' => 'form-control', 'placeholder' => 'Seleccione una categor&iacute;a', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('descripcion', 'Descripcion') !!}
			{!! Form::textarea('descripcion', $aporte->descripcion, ['class' => 'form-control', 'placeholder' => 'Nuevo aporte', 'rows' => '4']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary']) !!}
			{{ Form::hidden('_token', Session::token()) }}
		</div>
	{!! Form::close() !!}
@endsection