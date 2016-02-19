<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> @yield('title')</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container-fluid">
		<div class="row"><div class="col-xs-12">&nbsp;</div></div>
	
		<div class="row navbar navbar-default">
			<h1 class="navbar-text"><a href="..." class="">LOGUEADO</a></h1>
			
			<a href="" class="pull-right">Cerrar Sesion</a>
			<a href="" class="pull-right">David</a>
			<p class="pull-right btn-link">Bienvenido&nbsp;</p>			
		</div>
	</div>
	<div class="container">

		<div class="row">
			<div class="col-xs-8">
				<div class="row-fluid">
					<div class="col-xs-3">
						<a href="#">
							<img src="{{asset('img/btn-default-2.jpg')}}" alt="..." class="img-rounded img-responsive">
						</a>
					</div>
					<div class="col-xs-3">
						<a href="#">
							<img src="{{asset('img/btn-default-2.jpg')}}" alt="..." class="img-rounded img-responsive">
						</a>
					</div>
					<div class="col-xs-3">
						<a href="#">
							<img src="{{asset('img/btn-default-2.jpg')}}" alt="..." class="img-rounded img-responsive">
						</a>
					</div>
					<div class="col-xs-3">
						<a href="#">
							<img src="{{asset('img/btn-default-2.jpg')}}" alt="..." class="img-rounded img-responsive">
						</a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="col-xs-3">
						<a href="#">
							<img src="{{asset('img/btn-default-1.jpg')}}" alt="..." class="img-rounded img-responsive">
						</a>
					</div>
					<div class="col-xs-3">
						<a href="#">
							<img src="{{asset('img/btn-default-1.jpg')}}" alt="..." class="img-rounded img-responsive">
						</a>
					</div>
					<div class="col-xs-3">
						<a href="#">
							<img src="{{asset('img/btn-default-1.jpg')}}" alt="..." class="img-rounded img-responsive">
						</a>
					</div>
					<div class="col-xs-3">
						<a href="#">
							<img src="{{asset('img/btn-default-1.jpg')}}" alt="..." class="img-rounded img-responsive">
						</a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="col-xs-3">
						<a href="#">
							<img src="{{asset('img/btn-default-3.jpg')}}" alt="..." class="img-rounded img-responsive">
						</a>
					</div>
					<div class="col-xs-3">
						<a href="#">
							<img src="{{asset('img/btn-default-3.jpg')}}" alt="..." class="img-rounded img-responsive">
						</a>
					</div>
					<div class="col-xs-3">
						<a href="#">
							<img src="{{asset('img/btn-default-3.jpg')}}" alt="..." class="img-rounded img-responsive">
						</a>
					</div>
					<div class="col-xs-3">
						<a href="#">
							<img src="{{asset('img/btn-default-3.jpg')}}" alt="..." class="img-rounded img-responsive">
						</a>
					</div>
				</div>
			</div>

			<div class="col-xs-3 col-xs-offset-1">
				<p>calendario</p>
			</div>
		</div>
	</div>
	<footer class="footer navbar navbar-default navbar-fixed-bottom">
	    	<div class="container">
	    		<a href="" class="btn navbar-btn btn-info pull-right">Facebook</a>
	    		<p class="navbar-text pull-right">Site build for David Mamani C.</p>
	    	</div>
		</footer>
	<script src={{ asset('plugins/jquery/js/jquery-2.2.0.js') }}></script>
	<script src={{ asset('plugins/bootstrap/js/bootstrap.js') }}></script>
</body>
</html>