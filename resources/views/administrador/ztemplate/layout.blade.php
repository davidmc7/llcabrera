<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title> @yield('title') </title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/general.css')}}">
</head>
<body>
	<header>
		@include('administrador.ztemplate.nav')
	</header>
	
	<section class="jumbotron">
		<div class="container">
			<div class="col-md-9 hidden-xs hidden-sm">
				<h1>Nombre de la Empresa</h1>
				<p>Descripcion del Sistema</p>	
			</div>
			<div class="col-md-3">
				<a href="" class="">Cerrar Sesion</a>
				<a href="" class="">David</a>
				<p class="">Bienvenido&nbsp;</p>	
			</div>
		</div>
	</section>
	
	<section class="main container">
		<div class="row">
			<section class="general col-md-9">
				<div class="subnav">
					<ol class="breadcrumb">
						<li><a href="">Inicio</a></li>
						<li><a href="">Usuarios</a></li>
						<li>Crear</li>
					</ol>
				</div>
				<div class="principal">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">@yield('title')</h3>
						</div>
						<div class="panel-body">
							@include('flash::message')
							<!-- @include('administrador.ztemplate.errors') -->
							@yield('contenido')
						</div>
					</div>
				</div>
			</section>
			<section class="gestion col-md-3"><!-- o talves con variables -->
				@yield('gestion')
				<div class="text text-center gestion">
					<h2>Mes</h2>
					<h1>A&ntilde;o</h1>
					<h3>Dia</h3>
				</div>
			</section>
		</div>
	</section>

	<footer class="container-fluid pie">
		<div class="row">
			<div class="nav col-xs-6 col-xs-offset-6">
				<a href="" class="btn navbar-btn btn-info pull-right">Facebook</a>
	    		<p class="navbar-text pull-right">Site build for David Mamani C.</p>
			</div>
		</div>
	</footer>

	<script src={{ asset('plugins/jquery/js/jquery-2.2.0.js') }}></script>
	<script src={{ asset('plugins/bootstrap/js/bootstrap.js') }}></script>
</body>
</html>