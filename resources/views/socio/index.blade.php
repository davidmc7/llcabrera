@extends('layouts.master')

@section('title','Lista de Socios')

@section('content')

	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Nº</th>
					<th>Apellidos y Nombres</th>
					<th>C.I.</th>
					<th>Categoria</th>
					<th>C&oacute;digo</th>
					<th>Direccion</th>
					<th>Detalle</th>
					<th>Acci&oacute;n</th>
				</tr>
			       	</thead>
			<tbody>
			<?php	$i = 1; ?>
				
				@foreach($socios as $socio)
					<tr>
						<td>{{ $i }}</td>
						<td>{{ ucwords(strtolower($socio->nombre.' '.$socio->apellidoP.' '.$socio->apellidoM)) }}</td>
						<td>{{ $socio->ci.' '.$socio->ciExpedido }}</td>
						<td>{{ $socio->categoria_id }}</td>
						<td>{{ $socio->codigoSocio }}</td>
						<td>{{ $socio->direccion }}</td>
						<td><a href="#" class=""></a></td>
						<td>
							<a href="{{ route('socios.edit', $socio->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('socios.destroy', $socio->id) }}" onclick="return confirm('Seguro que deseas eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php	$i++; ?>
				@endforeach
		
				<tr>
					<td colspan="7">
						<a href="{{ route('socios.create') }}" class="btn btn-primary">Nuevo Socio</a>
						{{ Form::hidden('_token', Session::token()) }}
					</td>
					
				</tr>
			</tbody>
		</table>
		<div class="text-center">
			{!! $socios->render() !!}
		</div>
	</div>
@endsection