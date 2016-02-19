@extends('administrador.ztemplate.layout')

@section('title','Modificar comision' . $comision->nombre)

@section('contenido')

	{!! Form::open(['route' => ['admin.comisiones.update',$comision], 'method' => 'PUT']) !!} <!-- , 'files' => true -->
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre Comision') !!}
			{!! Form::text('nombre', strtolower(ucfirst($comision->nombre)), ['class' => 'form-control', 'placeholder' => 'Comision', 'required']) !!}
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
			{!! Form::textarea('descripcion', $comision->descripcion, ['class' => 'form-control', 'placeholder' => 'Nuevo comision', 'rows' => '4']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection