@extends('layouts.master')

@section('title','Lista de Aportes')

@section('content')

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
							<a href="{{ route('aportes.edit', $aporte->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('aportes.destroy', $aporte->id) }}" onclick="return confirm('Seguro que deseas eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php	$i++; ?>
				@endforeach
		
				<tr>
					<td colspan="7">
						<a href="{{ route('aportes.create') }}" class="btn btn-primary">Nuevo Aporte</a>
						{{ Form::hidden('_token', Session::token()) }}
					</td>
					
				</tr>
			</tbody>
		</table>
		<div class="text-center">
			{!! $aportes->render() !!}
		</div>
	</div>
@endsection