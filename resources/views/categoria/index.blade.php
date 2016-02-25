@extends('layouts.master')

@section('title','Lista de Categorias')

@section('content')

<div class="table-responsive">
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Nº</th>
				<th>Nombre</th>
				<th>Monto Bs.</th>
				<th>Monot Minimo Bs.</th>
				<th>Meses Retraso</th>
				<th>Descripci&oacute;n</th>
				<th>Acci&oacute;n</th>
			</tr>
		       	</thead>
		<tbody>
			<?php	$i = 1; ?>
			
			@foreach($categorias as $categoria)
				<tr>
					<td>{{ $i }}</td>
					<td>{{ $categoria->nombre }}</td>
					<td>{{ $categoria->monto }}</td>
					<td>{{ $categoria->montoMinimo }}</td>
					<td>{{ $categoria->mesesRetraso }}</td>
					<td>{{ $categoria->descripcion }}</td>
					<td>
						<a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
						<a href="{{ route('categorias.destroy', $categoria->id) }}" onclick="return confirm('Seguro que deseas eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
				<?php	$i++; ?>
			@endforeach

			<tr>
				<td colspan="7">
					<a href="{{ route('categorias.create') }}" class="btn btn-primary">Nuevo Categoria</a>
					{{ Form::hidden('_token', Session::token()) }}
				</td>
				
			</tr>
		</tbody>
	</table>
	<div class="text-center">
		{!! $categorias->render() !!}
	</div>
</div>
@endsection