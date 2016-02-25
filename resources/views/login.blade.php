<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ingresar al Sistema</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
	<div class="container-fluid">
		<div class="row"><div class="col-xs-12">&nbsp;</div></div>
	
		<div class="row navbar navbar-default">
			<h1 class="text text-center"><a href="#" class="">INICIO</a></h1>
		</div>
	</div>
	<div class="container">
	    <div class="row">
	        <div class="col-md-4 col-md-offset-4">
	            <h3 class="text-center">Iniciar sesi&oacute;n</h3>
				{!! Form::open(['route' => 'login', 'method' => 'POST']) !!} 
					<div class="form-group">
						{!! Form::label('cuenta', 'Cuenta') !!}
						{!! Form::text('login',null,['class' => 'form-control', 'placeholder' => 'login', 'required', 'autofocus']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('contrasenia', 'Contrase&ntilde;a') !!}
						{!! Form::password('password',['class' => 'form-control', 'placeholder' => '***********', 'required']) !!}
					</div>

					<!-- <div class="form-group">
						{!! Form::checkbox('session', 1, null, ['class' => '']) !!}
						{!! Form::label('session', 'No cerrar sesi&oacute;n') !!}
					</div> -->

					<div class="form-group">
						{!! Form::submit('Iniciar Sesi&oacute;n',['class' => 'btn btn-lg btn-success btn-block']) !!}
						{{ Form::hidden('_token', Session::token()) }}
					</div>

					<!-- <a href="#" class="pull-right forgot-password">¿Olvisdaste tu contrase&ntilde;a?</a> -->
				
				{!! Form::close() !!}
			</div>
		</div>
	</div>
	<footer class="footer navbar navbar-default navbar-fixed-bottom">
	    <div class="container">
	    	<a href="http://www.facebook.com/davidman01" class="btn navbar-btn btn-info pull-right">Facebook</a>
	    	<p class="navbar-text pull-right">Site build for David Mamani C.</p>
	    </div>
	</footer>

	<script src={{ asset('plugins/jquery/js/jquery-2.2.0.js') }}></script>
	<script src={{ asset('plugins/bootstrap/js/bootstrap.js') }}></script>
</body>
</html>