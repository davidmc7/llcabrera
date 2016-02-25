@extends('layouts.master')

@section('title','Aportes de Socios')

@section('content')

<div class="jumbotron">
		<h2>Crear Aporte de Socios</h2>
		
		<fieldset>
			<legend>Aportes encontrados</legend>
			<div class="table-responsive">
				<table class="table table-striped table-hover table-condensed">
					<thead>
						<tr>
							<th>Nº</th>
							<th>Nombre Aporte</th>
							<th>Monto</th>
							<th>Asignar</th>
						</tr>
		        	</thead>
					<tbody>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#asignar">Asignar</button>
					</tbody>
				</table>
			</div>
		</fieldset>

		<div class="modal fade" id="asignar" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
        				<h4 class="modal-title" id="myModalLabel">Lista de Socios</h4>
					</div>
					<div class="modal-body">
						<fieldset>
							<legend>Socios tipo..</legend>
							<form action="" class="form-horizontal">
								<div class="table">
									<table class="table table-striped table-hover table-condensed">
										<thead>
											<tr>
												<th>Nº</th>
												<th>Nombre Completo</th>
												<th><input type="checkox" class="checkox"></th>
											</tr>
										</thead>
									</table>
								</div>
							</form>
						</fieldset>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar
						</button>
	        			<button type="button" class="btn btn-primary">Guardar Asignaci&oacute;n
	        			</button>
					</div>
				</div>
				
			</div>
		</div>
	</div>
@endsection