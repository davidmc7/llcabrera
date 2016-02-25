@extends('layouts.master')

@section('title','Lista de Multas')

@section('content')

	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th class="text-center">Nº</th>
					<th class="text-center">Categoria</th>
					<th class="text-center">Cantidad de Meses</th>
					<th class="text-center">Multa Bs.</th>
					<th class="text-center">Porcentaje</th>
					<th class="text-center">Descripcion</th>
					<th class="text-center">Acci&oacute;n</th>
				</tr>
			       	</thead>
			<tbody>
			<?php	
				$i = 1; 
				$meses = ['1' => 'Enero', '2' => 'Febrero', '3' => 'Marzo', '4' => 'Abril', '5' => 'Mayo', '6' => 'Junio', '7' => 'Julio', '8' => 'Agosto', '9' => 'Septiembre', '10' => 'Octubre',	'11' => 'Noviembre', '12' => 'Deciembre'];
			?>

				@foreach($multas as $multa)
					<tr>
						<td>{{ $i }}</td>
						<td>{{ $multa->categoria->nombre }}</td>
						<td class="text-center">{{ $multa->meses }}</td>
						<td class="text-center">{{ $multa->multa }}</td>
						<td class="text-center">{{ $multa->porcentaje }}</td>
						<td>{{ $multa->descripcion }}</td>
						<td class="text-center">
							<a href="{{ route('multas.edit', $multa->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('multas.destroy', $multa->id) }}" onclick="return confirm('Seguro que deseas eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php	$i++; ?>
				@endforeach
		
				<tr>
					<td colspan="7">
						<a href="{{ route('multas.create') }}" class="btn btn-primary">Nueva Multa</a>
						{{ Form::hidden('_token', Session::token()) }}
					</td>
				</tr>
			</tbody>
		</table>
		<div class="text-center">
			{!! $multas->render() !!}
		</div>
	</div>
@endsection