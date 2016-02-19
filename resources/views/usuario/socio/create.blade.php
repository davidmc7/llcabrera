<!-- poner una condicional para extender, saber si admin o usuario con auth -->
@extends('usuario.ztemplate.layout')

@section('title','Crear Socio')

@section('contenido')
<?php
	$profesion = ['Alba&ntilde;il' => 'Alba&ntilde;il'];
	$genero = ['M' => 'Masculin@', 'F' => 'Femenin@'];
	$estadoCivil = ['Solter@' => 'Solter@', 'Casad@' => 'Casad@', 'Viud@' => 'Viud@'];
	$tipoResponsable = ['Propietari@' => 'Propietari@', 'Encargad@' => 'Encargad@', 'Inquilin@' => 'Inquiln@'];
?>

{!! Form::open(['route' => 'user.socios.store', 'method' => 'POST']) !!} <!-- , 'files' => true -->
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	<div class="panel panel-primary">
		<div class="panel-heading" role="tab" id="headingUno">
			<h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseUno" aria-expanded="true" aria-controls="collapseUno">
					<i class="maximizar glyphicon glyphicon-chevron-up pull-right"></i>
					Datos Socio
				</a>
			</h4>
		</div>
		<div id="collapseUno" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingUno">
			<div class="panel-body">
				<div class="form-group">
					{!! Form::label('nombre', 'Nombre') !!}
					{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
					{!! Form::text('apellidoP', null, ['class' => 'form-control', 'placeholder' => 'Apellido paterno']) !!}
					{!! Form::text('apellidoM', null, ['class' => 'form-control', 'placeholder' => 'Apellido materno']) !!}
				</div>
				
				<div class="form-group">
					{!! Form::label('categoria', 'Categoria Socio') !!}
					{!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una categoria', 'required']) !!}<!-- ['' => "Elija un tipo socio"] +  -->
				</div>

				<div class="form-group">
					{!! Form::label('profesion', 'Profesi&oacute;n') !!}
					{!! Form::select('profesion', ['' => "Elija una profesi&oacute;n"] + $profesion, null, ['class' => 'form-control']) !!}
				</div>
				
				<div class="form-group">
					{!! Form::label('genero', 'Genero') !!}
					{!! Form::select('genero', ['' => "Elija un genero"] + $genero, null, ['class' => 'form-control']) !!}
				</div>
				
				<div class="form-group">
					{!! Form::label('estadoCivil', 'Estado Civil') !!}
					{!! Form::select('estadoCivil', ['' => "Elija un estado civil"] + $estadoCivil, null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('fecnac', 'Fecha de Nacimiento') !!}
					{!! Form::text('fecnac', null, ['class' => 'form-control input-append date', 'id' => 'fecha', 'data-date-format' => 'dd-mm-yyyy']) !!}
					<a href="" class="">
						<span class="glyphicon glyphicon-calendar"></span>
					</a>
				</div>

				<div class="form-group">
					{!! Form::label('tipoResponsable', 'Tipo Responsable') !!}
					{!! Form::select('tipoResponsable', ['' => "Elija tipo responsable"] + $tipoResponsable, null, ['class' => 'form-control']) !!}
				</div>
				
				<div class="form-group">
					{!! Form::label('telefono', 'Telefono') !!}
					{!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => '1234567']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('celular', 'Celular') !!}
					{!! Form::text('celular', null, ['class' => 'form-control', 'placeholder' => '75454665']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('conexiones', 'N&uacute;mero Conexiones') !!}
					{!! Form::text('conexiones', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('pisos', 'Numero de Pisos') !!}
					{!! Form::text('pisos', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('personas', 'Numero de Personas') !!}
					{!! Form::text('personas', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>
				
				<div class="form-group">
					{!! Form::label('direccion', 'Direcci&oacute;n') !!}
					{!! Form::text('lote', null, ['class' => 'form-control', 'placeholder' => 'N&uacute;mero de Lote', 'required']) !!}
					{!! Form::text('manzano', null, ['class' => 'form-control', 'placeholder' => 'Numero de Manzano', 'required']) !!}
					{!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Av. Ayacucho # 123']) !!}
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-primary">
		<div class="panel-heading" role="tab" id="headingDos">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseDos" aria-expanded="false" aria-controls="collapseDos">
					<i class="maximizar glyphicon glyphicon-chevron-down pull-right"></i>
					Datos Agua
				</a>
			</h4>
		</div>
		<div id="collapseDos" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingDos">
			<div class="panel-body">
				<div class="form-group">
					{!! Form::label('numeroMe', 'Numero de Medidor') !!}
					{!! Form::text('numeroMe', null, ['class' => 'form-control', 'placeholder' => '000AB00', 'required']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('lecturaMe', 'Lectura de Medidor') !!}
					{!! Form::text('lecturaMe', null, ['class' => 'form-control', 'placeholder' => '1234,56', 'required']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('diametroMe', 'Diametro de Medidor') !!}
					{!! Form::text('diametroMe', null, ['class' => 'form-control', 'placeholder' => '0,00']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('estadoMe', 'Estado de Medidor') !!}
					{!! Form::text('estadoMe', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('caracteristicaCo', 'Caracteristica de Cometida') !!}
					{!! Form::text('caracteristicaCo', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('diametroCo', 'Diametro de Cometida') !!}
					{!! Form::text('diametroCo', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('materialCo', 'Material de Cometida') !!}
					{!! Form::text('materialCo', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('situacionCo', 'Situacion Cometida') !!}
					{!! Form::text('situacionCo', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('fugaCo', 'Fuga Cometida') !!}
					{!! Form::text('fugaCo', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('hubicacionCa', 'Hubicacion Camara') !!}
					{!! Form::text('hubicacionCa', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('estadoCa', 'Estado Camara') !!}
					{!! Form::text('estadoCa', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('profundidadCa', 'Profundidad Camara') !!}
					{!! Form::text('profundidadCa', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-primary">
		<div class="panel-heading" role="tab" id="headingTres">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
					<i class="maximizar glyphicon glyphicon-chevron-down pull-right"></i>
					Datos Alcantarillado
				</a>
			</h4>
		</div>
		<div id="collapseTres" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTres">
			<div class="panel-body">
				<p>Despues</p>
			</div>
		</div>
	</div>
</div>
	<div class="form-group">
		{!! Form::submit('Crear Nuevo Socio', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}

@endsection