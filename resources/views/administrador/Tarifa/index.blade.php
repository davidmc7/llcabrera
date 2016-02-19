@extends('administrador.ztemplate.layout')

@section('title','Lista de Tarifas')

@section('contenido')

	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Nº</th>
					<th>Nombre</th>
					<th>Monto Mts3</th>
					<th>Monto Bs</th>
					<th>Consumo Minimo</th>
					<th>Mes Inicial</th>
					<th>Mes Final</th>
					<th>Gesti&oacute;n</th>
					<th>Acci&oacute;n</th>
				</tr>
			       	</thead>
			<tbody>
			<?php	
				$i = 1; 
				$meses = ['1' => 'Enero', '2' => 'Febrero', '3' => 'Marzo', '4' => 'Abril', '5' => 'Mayo', '6' => 'Junio', '7' => 'Julio', '8' => 'Agosto', '9' => 'Septiembre', '10' => 'Octubre',	'11' => 'Noviembre', '12' => 'Deciembre'];
			?>

				@foreach($tarifas as $aporte)
					<tr>
						<td>{{ $i }}</td>
						<td>{{ $aporte->nombre }}</td>
						<td>{{ $aporte->montoMts3 }}</td>
						<td>{{ $aporte->montoBs }}</td>
						<td>{{ $aporte->consumoMinimo }}</td>
						<td>{{ $meses[$aporte->mesIni] }}</td> 
						<td>{{ $meses[$aporte->mesFin] }}</td>
						<td>{{ $aporte->anio }}</td>
						<td>
							<a href="{{ route('admin.tarifas.edit', $aporte->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('admin.tarifas.destroy', $aporte->id) }}" onclick="return confirm('Seguro que deseas eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php	$i++; ?>
				@endforeach
		
				<tr>
					<td colspan="7">
						<a href="{{ route('admin.tarifas.create') }}" class="btn btn-primary">Nueva Tarifa</a>
					</td>
					
				</tr>
			</tbody>
		</table>
		<div class="text-center">
			{!! $tarifas->render() !!}
		</div>
	</div>
@endsection