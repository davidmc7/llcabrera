@extends('administrador.ztemplate.layout')

@section('title','Lista de Usuarios')

@section('contenido')

	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Nº</th>
					<th>Nombre</th>
					<th>Cuenta</th>
					<th>Tipo</th>
					<th>C.I.</th>
					<th>Telefono</th>
					<th>Celular</th>
					<th>Acci&oacute;n</th>
				</tr>
	       	</thead>
			<tbody>
			<?php	$i = 1; ?>
				
				@foreach($usuarios as $usuario)
					<tr>
						<td>{{ $i }}</td>
						<td>{{ ucwords(strtolower($usuario->nombre." ".$usuario->apellidoP." ".$usuario->apellidoM)) }}</td>
						<td>{{ $usuario->login }}</td>
						<td>
							@if($usuario->tipo == "ADMINISTRADOR")
								<span class="label label-warning">{{ ucfirst(strtolower($usuario->tipo)) }}</span>
							@else
								<span class="label label-success">{{ ucfirst(strtolower($usuario->tipo)) }}</span>
							@endif

						</td>
						<td>{{ $usuario->ci }}</td>
						<td>{{ $usuario->telefono }}</td>
						<td>{{ $usuario->celular }}</td>
						<td>
							<a href="{{ route('admin.usuarios.edit', $usuario->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('admin.usuarios.destroy', $usuario->id) }}" onclick="return confirm('Seguro que deseas eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php	$i++; ?>
				@endforeach

				<tr>
					<td colspan="7">
						<a href="{{ route('admin.usuarios.create') }}" class="btn btn-primary">Nuevo Usuario</a>
					</td>
					
				</tr>
			</tbody>
		</table>
		<div class="text-center">
			{!! $usuarios->render() !!}
		</div>
	</div>

@endsection