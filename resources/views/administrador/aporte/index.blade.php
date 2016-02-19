@extends('administrador.ztemplate.layout')

@section('title','Lista de Aportes')

@section('contenido')

	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Nº</th>
					<th>Nombre</th>
					<th>Monto</th>
					<th>Acci&oacute;n</th>
				</tr>
			       	</thead>
			<tbody>
			<?php	$i = 1; ?>
				
				@foreach($aportes as $aporte)
					<tr>
						<td>{{ $i }}</td>
						<td>{{ ucfirst(strtolower($aporte->nombre)) }}</td>
						<td>{{ $aporte->monto }}</td>
						<td>
							<a href="{{ route('admin.aportes.edit', $aporte->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('admin.aportes.destroy', $aporte->id) }}" onclick="return confirm('Seguro que deseas eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php	$i++; ?>
				@endforeach
		
				<tr>
					<td colspan="7">
						<a href="{{ route('admin.aportes.create') }}" class="btn btn-primary">Nuevo Aporte</a>
					</td>
					
				</tr>
			</tbody>
		</table>
		<div class="text-center">
			{!! $aportes->render() !!}
		</div>
	</div>
@endsection