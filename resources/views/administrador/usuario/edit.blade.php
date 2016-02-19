@extends('administrador.ztemplate.layout')

@section('title','Editar usuario '.ucwords(strtolower($usuario->nombre." ".$usuario->apellidoP." ".$usuario->apellidoM)))

@section('contenido')
	{!! Form::open(['route' => ['admin.usuarios.update', $usuario], 'method' => 'PUT']) !!} <!-- , 'files' => true -->
		<div class="form-group">
			{!! Form::label('login', 'Login') !!}
			{!! Form::text('login', $usuario->login, ['class' => 'form-control', 'placeholder' => 'Nombre de la Cuenta', 'required']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre') !!}
			{!! Form::text('nombre', ucfirst(strtolower($usuario->nombre)), ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
			{!! Form::text('apellidoP', ucfirst(strtolower($usuario->apellidoP)), ['class' => 'form-control', 'placeholder' => 'Apellido Paterno', 'required']) !!}
			{!! Form::text('apellidoM', ucfirst(strtolower($usuario->apellidoM)), ['class' => 'form-control', 'placeholder' => 'Apellido Materno', 'required']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('ci', 'C.I.') !!}
			{!! Form::text('ci', $usuario->ci,['class' => 'form-control', 'placeholder' => 'Numero de Carnet', 'required']) !!}
			{!! Form::select('ciExpedido', ['' => 'Seleccione un Dpto.', 'COCHABAMBA' => 'Cochabamba', 'ORURO' => 'Oruro', 'POTOSI' => 'Potosi', 'LA PAZ' => 'La Paz', 'SANTA CRUZ' => 'Santa Cruz', 'BENI' => 'Beni', 'PANDO' => 'Pando', 'TARIJA' => 'Tarija', 'CHUQUISACA' => 'Chuquisaca'], $usuario->ciExpedido, ['class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', $usuario->email, ['class' => 'form-control', 'placeholder' => 'example@gmail.com']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('telefono', 'Telefono') !!}
			{!! Form::text('telefono', $usuario->telefono, ['class' => 'form-control', 'placeholder' => '4539368']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('celular', 'Celular') !!}
			{!! Form::text('celular', $usuario->celular, ['class' => 'form-control', 'placeholder' => '68447133']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('direccion', 'Direcci&oacute;n') !!}
			{!! Form::text('direccion', $usuario->direccion, ['class' => 'form-control', 'placeholder' => 'Zona 4, Calle s/n']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('fotografia', 'Fotograf&iacute;a') !!}
			{!! Form::file('foto', ['class' => '']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('tipo', 'Tipo') !!}
			{!! Form::select('tipo', ['' => 'Seleccione Tipo de Usuario', 'USUARIO' => 'Usuario', 'ADMINISTRADOR' => 'Administrador'], $usuario->tipo, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary']) !!}
			    </div>
	{!! Form::close() !!}

@endsection