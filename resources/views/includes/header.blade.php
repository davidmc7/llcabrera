<header>
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
				<li><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
				
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="buttin">Socio<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{ route('categorias.index') }}">Categorias</a></li>
						<li class="divider"></li>
						<li><a href="{{ route('socios.index') }}">Socios</a></li>
					</ul>
				</li>
				<li><a href="{{ route('comisiones.index') }}">Comisiones</a></li>
				<li><a href="{{ route('multas.index') }}">Multas</a></li>
				<li><a href="{{ route('aportes.index') }}">Aportes</a></li>
				<li><a href="#">Lecturar</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="buttin">Cobrar<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Lecturas</a></li>
						<li><a href="#">Aportes</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="buttin">Informes<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Ingresos</a></li>
						<li><a href="#">Socio</a></li>
					</ul>
				</li>

				<li><a href="#">Ajustes</a></li>

			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ route('logout') }}">Salir</a></li>
			</ul>
		</div>
	</div>
</nav>
</header>