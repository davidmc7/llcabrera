@extends('administrador.ztemplate.layout')

@section('title','Crear Usuario')

@section('contenido')
	{!! Form::open(['route' => 'admin.usuarios.store', 'method' => 'POST']) !!} <!-- , 'files' => true -->
		<div class="form-group">
			{!! Form::label('login', 'Login') !!}
			{!! Form::text('login', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la Cuenta', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Contrasen&ntilde;a') !!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*********', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Confirme Contrasen&ntilde;a') !!}
			{!! Form::password('password2', ['class' => 'form-control', 'placeholder' => '*********', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('nombre', 'Nombre') !!}
			{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
			{!! Form::text('apellidoP', null, ['class' => 'form-control', 'placeholder' => 'Apellido Paterno', 'required']) !!}
			{!! Form::text('apellidoM', null, ['class' => 'form-control', 'placeholder' => 'Apellido Materno', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('ci', 'C.I.') !!}
			{!! Form::text('ci', null,['class' => 'form-control', 'placeholder' => 'Numero de Carnet', 'required']) !!}
			{!! Form::select('ciExpedido', ['' => 'Seleccione un Dpto.', 'COCHABAMBA' => 'Cochabamba', 'ORURO' => 'Oruro', 'POTOSI' => 'Potosi', 'LA PAZ' => 'La Paz', 'SANTA CRUZ' => 'Santa Cruz', 'BENI' => 'Beni', 'PANDO' => 'Pando', 'TARIJA' => 'Tarija', 'CHUQUISACA' => 'Chuquisaca'], null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('telefono', 'Telefono') !!}
			{!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => '4539368']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('celular', 'Celular') !!}
			{!! Form::text('celular', null, ['class' => 'form-control', 'placeholder' => '68447133']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('direccion', 'Direcci&oacute;n') !!}
			{!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Zona 4, Calle s/n']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('fotografia', 'Fotograf&iacute;a') !!}
			{!! Form::file('foto', ['class' => '']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tipo', 'Tipo') !!}
			{!! Form::select('tipo', ['' => 'Seleccione Tipo de Usuario', 'USUARIO' => 'Usuario', 'ADMINISTRADOR' => 'Administrador'], null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Crear Nuevo Usuario', ['class' => 'btn btn-primary']) !!}
	    </div>
	{!! Form::close() !!}

@endsection