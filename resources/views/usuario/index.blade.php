@extends('layouts.master')

@section('title','Lista de Usuarios')

@section('content')

	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Nº</th>
					<th class="text text-center">Nombre</th>
					<th class="text text-center">Cuenta</th>
					<th class="text text-center">Tipo</th>
					<th class="text text-center">C.I.</th>
					<th class="text text-center">Telefono</th>
					<th class="text text-center">Celular</th>
					<th class="text text-center">Acci&oacute;n</th>
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
							@if($usuario->tipos == "Administrador")
								<span class="label label-warning">{{ $usuario->tipos }}</span>
							@else
								<span class="label label-success">{{ $usuario->tipos }}</span>
							@endif

						</td>
						<td>{{ $usuario->ci }}</td>
						<td>{{ $usuario->telefono }}</td>
						<td>{{ $usuario->celular }}</td>
						<td>
							<a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('usuarios.destroy', $usuario->id) }}" onclick="return confirm('Seguro que deseas eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
						</td>
					</tr>
					<?php	$i++; ?>
				@endforeach

				<tr>
					<td colspan="7">
						<a href="{{ route('usuarios.create') }}" class="btn btn-primary">Nuevo Usuario</a>
						{{ Form::hidden('_token', Session::token()) }}
					</td>
					
				</tr>
			</tbody>
		</table>
		<div class="text-center">
			{!! $usuarios->render() !!}
		</div>
	</div>

@endsection