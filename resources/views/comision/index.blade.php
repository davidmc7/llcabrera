@extends('layouts.master')

@section('title','Lista de comisiones')

@section('content')

	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Nº</th>
					<th>Nombre</th>
					<th>Estado</th>
					<th>Monto</th>
					<th>Categor&iacute;a</th>
					<th>Acci&oacute;n</th>
				</tr>
			       	</thead>
			<tbody>
			<?php	$i = 1; ?>
				
				@foreach($comisiones as $comision)
					<tr>
						<td>{{ $i }}</td>
						<td>{{ $comision->nombre }}</td>
						<td>{{ $estado[$comision->estado] }}</td>
						<td>{{ $comision->monto }}</td>
						<td>{{ $comision->categoria->nombre }}</td>
						<td>
							<a href="{{ route('comisiones.edit', $comision->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('comisiones.destroy', $comision->id) }}" onclick="return confirm('Seguro que deseas eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php	$i++; ?>
				@endforeach
		
				<tr>
					<td colspan="7">
						<a href="{{ route('comisiones.create') }}" class="btn btn-primary">Nueva Comision</a>
						{{ Form::hidden('_token', Session::token()) }}
					</td>
					
				</tr>
			</tbody>
		</table>
		<div class="text-center">
			{!! $comisiones->render() !!}
		</div>
	</div>
@endsection