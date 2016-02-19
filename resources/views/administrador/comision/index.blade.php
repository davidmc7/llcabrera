@extends('administrador.ztemplate.layout')

@section('title','Lista de comisiones')

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
				
				@foreach($comisiones as $comision)
					<tr>
						<td>{{ $i }}</td>
						<td>{{ ucfirst(strtolower($comision->nombre)) }}</td>
						<td>{{ $comision->monto }}</td>
						<td>
							<a href="{{ route('admin.comisiones.edit', $comision->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('admin.comisiones.destroy', $comision->id) }}" onclick="return confirm('Seguro que deseas eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php	$i++; ?>
				@endforeach
		
				<tr>
					<td colspan="7">
						<a href="{{ route('admin.comisiones.create') }}" class="btn btn-primary">Nuevo Comision</a>
					</td>
					
				</tr>
			</tbody>
		</table>
		<div class="text-center">
			{!! $comisiones->render() !!}
		</div>
	</div>
@endsection