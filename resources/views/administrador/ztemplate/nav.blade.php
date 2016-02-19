<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
	<div class="container">
		<div class="nav-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-dmc">
				<span class="sr-only">Desplegar / Ocultar Menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Sigla del Sistema</a>
		</div>
				<!-- Aqui va el codigo del menu-->
		<div class="collapse navbar-collapse" id="navegacion-dmc">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Inicio</a></li>
				<li><a href="{{ route('admin.usuarios.index') }}">Usuarios</a></li>
				
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="buttin">Socio<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{ route('user.socios.index') }}">Socios</a></li>
						<li class="divider"></li>
						<li><a href="{{ route('admin.categorias.index') }}">Categorias</a></li>
					</ul>
				</li>

				<li><a href="#">Lecturar</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="buttin">Cobrar<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Lecturas</a></li>
						<li><a href="#">Aportes</a></li>
					</ul>
				</li>
				<li><a href="{{ route('admin.tarifas.index') }}">Tarifas</a></li>
				<li><a href="{{ route('admin.aportes.index') }}">Aportes</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="buttin">Informes<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Ingresos</a></li>
						<li><a href="#">Socio</a></li>
					</ul>
				</li>

				<li><a href="#">Ajustes</a></li>

			</ul>
			<form action="" class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Buscar codigo socio">
					<button class="btn btn-primary">
						<span class="glyphicon glyphicon-search"></span>
					</button>		
				</div>
			</form>
		</div>
	</div>
</nav>