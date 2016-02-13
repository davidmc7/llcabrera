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
			<h1 class="text text-center"><a href="..." class="">INICIO</a></h1>
		</div>
	</div>
	<div class="container">
	    <div class="row">
	        <div class="col-md-4 col-md-offset-4">
	            <h3 class="sign-up-title text-center login-title">Inicia sesi&oacute;n para continuar</h3>
	            <div class="account-wall">
					

					<form class="form-signin">
						{!! Form::text('user',null,['class' => 'form-control', 'placeholder' => 'usuario', 'required', 'autofocus']) !!}

						{!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Contrase&ntilde;a', 'required']) !!}

						{!! Form::submit('Iniciar Sesi&oacute;n',['class' => 'btn btn-lg btn-success btn-block']) !!}
						
						<label class="checkbox">
							<input class="" type="checkbox" name="sessioned" value="">
							No cerrar sesi&oacute;n
						</label>


						<a href="#" class="pull-right forgot-password">¿Olvisdaste tu contrase&ntilde;a?</a>
					</form>



				</div>
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