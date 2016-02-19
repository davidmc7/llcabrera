@extends('administrador.ztemplate.layout')

@section('title','Lista de Categorias')

@section('contenido')

<div class="table-responsive">
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Nº</th>
				<th>Nombre</th>
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
					<td>{{ $categoria->descripcion }}</td>
					<td>
						<a href="{{ route('admin.categorias.edit', $categoria->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
						<a href="{{ route('admin.categorias.destroy', $categoria->id) }}" onclick="return confirm('Seguro que deseas eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
				<?php	$i++; ?>
			@endforeach

			<tr>
				<td colspan="7">
					<a href="{{ route('admin.categorias.create') }}" class="btn btn-primary">Nuevo Categoria</a>
				</td>
				
			</tr>
		</tbody>
	</table>
	<div class="text-center">
		{!! $categorias->render() !!}
	</div>
</div>
@endsection