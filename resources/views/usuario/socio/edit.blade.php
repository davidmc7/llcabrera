<!-- poner una condicional para extender, saber si admin o usuario con auth -->
@extends('usuario.ztemplate.layout')

@section('title','Modificar Socio ' . ucwords(strtolower($socio->nombre.' '.$socio->apellidoP.' '.$socio->apellidoM )))

@section('contenido')
<?php
	$profesion = ['Alba&ntilde;il' => 'Alba&ntilde;il'];
	$genero = ['M' => 'Masculin@', 'F' => 'Femenin@'];
	$estadoCivil = ['Solter@' => 'Solter@', 'Casad@' => 'Casad@', 'Viud@' => 'Viud@'];
	$tipoResponsable = ['Propietari@' => 'Propietari@', 'Encargad@' => 'Encargad@', 'Inquilin@' => 'Inquiln@'];
?>

{!! Form::open(['route' => ['user.socios.update', $socio], 'method' => 'put']) !!} <!-- , 'files' => true -->
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
					{!! Form::text('nombre', ucwords(strtolower($socio->nombre)), ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
					{!! Form::text('apellidoP', ucwords(strtolower($socio->apellidoP)), ['class' => 'form-control', 'placeholder' => 'Apellido paterno']) !!}
					{!! Form::text('apellidoM', ucwords(strtolower($socio->apellidoM)), ['class' => 'form-control', 'placeholder' => 'Apellido materno']) !!}
				</div>
				
				<div class="form-group">
					{!! Form::label('categoria', 'Categoria Socio') !!}
					{!! Form::select('categoria_id', $categorias, $socio->categoria->id, ['class' => 'form-control', 'placeholder' => 'Seleccione una categoria', 'required']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('profesion', 'Profesi&oacute;n') !!}
					{!! Form::select('profesion', $profesion, $socio->profesion, ['class' => 'form-control','placeholder' => 'Elija una profesi&oacute;n']) !!}
				</div>
				
				<div class="form-group">
					{!! Form::label('genero', 'Genero') !!}
					{!! Form::select('genero', ['' => "Elija un genero"] + $genero, $socio->genero, ['class' => 'form-control']) !!}
				</div>
				
				<div class="form-group">
					{!! Form::label('estadoCivil', 'Estado Civil') !!}
					{!! Form::select('estadoCivil', ['' => "Elija un estado civil"] + $estadoCivil, $socio->estadoCivil, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('fecnac', 'Fecha de Nacimiento') !!}
					{!! Form::text('fecnac', $socio->fecnac, ['class' => 'form-control input-append date', 'id' => 'fecha', 'data-date-format' => 'dd-mm-yyyy']) !!}
					<a href="" class="">
						<span class="glyphicon glyphicon-calendar"></span>
					</a>
				</div>

				<div class="form-group">
					{!! Form::label('tipoResponsable', 'Tipo Responsable') !!}
					{!! Form::select('tipoResponsable', ['' => "Elija tipo responsable"] + $tipoResponsable, $socio->tipoResponsable, ['class' => 'form-control']) !!}
				</div>
				
				<div class="form-group">
					{!! Form::label('telefono', 'Telefono') !!}
					{!! Form::text('telefono', $socio->telefono, ['class' => 'form-control', 'placeholder' => '1234567']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('celular', 'Celular') !!}
					{!! Form::text('celular', $socio->celular, ['class' => 'form-control', 'placeholder' => '75454665']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('conexiones', 'N&uacute;mero Conexiones') !!}
					{!! Form::text('conexiones', $socio->conexiones, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('pisos', 'Numero de Pisos') !!}
					{!! Form::text('pisos', $socio->pisos, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('personas', 'Numero de Personas') !!}
					{!! Form::text('personas', $socio->personas, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>
				
				<div class="form-group">
					{!! Form::label('direccion', 'Direcci&oacute;n') !!}
					{!! Form::text('lote', $socio->lote, ['class' => 'form-control', 'placeholder' => 'N&uacute;mero de Lote', 'required']) !!}
					{!! Form::text('manzano', $socio->manzano, ['class' => 'form-control', 'placeholder' => 'Numero de Manzano', 'required']) !!}
					{!! Form::text('direccion', $socio->direccion, ['class' => 'form-control', 'placeholder' => 'Av. Ayacucho # 123']) !!}
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
					{!! Form::text('numeroMe', $socio->agua->numeroMe, ['class' => 'form-control', 'placeholder' => '000AB00', 'required']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('lecturaMe', 'Lectura de Medidor') !!}
					{!! Form::text('lecturaMe', $socio->agua->lecturaMe, ['class' => 'form-control', 'placeholder' => '1234,56', 'required']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('diametroMe', 'Diametro de Medidor') !!}
					{!! Form::text('diametroMe', $socio->agua->diametroMe, ['class' => 'form-control', 'placeholder' => '0,00']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('estadoMe', 'Estado de Medidor') !!}
					{!! Form::text('estadoMe', $socio->agua->estadoMe, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('caracteristicaCo', 'Caracteristica de Cometida') !!}
					{!! Form::text('caracteristicaCo', $socio->agua->caracteristicaCo, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('diametroCo', 'Diametro de Cometida') !!}
					{!! Form::text('diametroCo', $socio->agua->diametroCo, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('materialCo', 'Material de Cometida') !!}
					{!! Form::text('materialCo', $socio->agua->materialCo, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('situacionCo', 'Situacion Cometida') !!}
					{!! Form::text('situacionCo', $socio->agua->situacionCo, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('fugaCo', 'Fuga Cometida') !!}
					{!! Form::text('fugaCo', $socio->agua->fugaCo, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('hubicacionCa', 'Hubicacion Camara') !!}
					{!! Form::text('hubicacionCa', $socio->agua->hubicacionCa, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('estadoCa', 'Estado Camara') !!}
					{!! Form::text('estadoCa', $socio->agua->estadoCa, ['class' => 'form-control', 'placeholder' => '0']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('profundidadCa', 'Profundidad Camara') !!}
					{!! Form::text('profundidadCa', $socio->agua->profundidadCa, ['class' => 'form-control', 'placeholder' => '0']) !!}
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
		{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}

@endsection