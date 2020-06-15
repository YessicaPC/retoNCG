<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/hamburgers.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/util.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/animsition.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/daterangepicker.css')}}">
    <title>Inicio sesión</title>
  </head>
  <body>
    <div class="limiter">
  		<div class="container-login100" style="background-image: url('img/1.jpg');">
  			<div class="wrap-login100">
  				<form class="login100-form validate-form">
  					<span class="login100-form-logo">
  						<i class="zmdi zmdi-landscape"></i>
  					</span>
  					<span class="login100-form-title p-b-34 p-t-27">Inicio de Sesión</span>
  					<div class="wrap-input100 validate-input" data-validate = "Coloque nombre de usuario">
  						<input class="input100" type="text" name="username" placeholder="Nombre de Usuario">
  						<span class="focus-input100" data-placeholder="&#xf207;"></span>
  					</div>
  					<div class="wrap-input100 validate-input" data-validate="Coloque contraseña">
  						<input class="input100" type="password" name="pass" placeholder="Contraseña">
  						<span class="focus-input100" data-placeholder="&#xf191;"></span>
  					</div>
  					<div class="contact100-form-checkbox">
  						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
  						<label class="label-checkbox100" for="ckb1">
  							Recordarme
  						</label>
  					</div>
  					<div class="container-login100-form-btn">
  						<button class="login100-form-btn">
  							Iniciar sesión
  						</button>
  					</div>
  				</form>
  			</div>
  		</div>
  	</div>


  	<div id="dropDownSelect1"></div>

    <script src="{{ asset('/js/jquery-3.2.1.min.js')}}"></script>
  	<script src="{{ asset('/js/animsition.min.js')}}"></script>
  	<script src="{{ asset('/js/popper.js')}}"></script>
  	<script src="{{ asset('/js/bootstrap.min.js')}}"></script>
  	<script src="{{ asset('/js/select2.min.js')}}"></script>
  	<script src="{{ asset('/js/da/moment.min.js')}}"></script>
  	<script src="{{ asset('/js/daterangepicker.js')}}"></script>
  	<script src="{{ asset('/js/countdowntime.js')}}"></script>
  	<script src="{{ asset('/js/main.js')}}"></script>
  </body>
</html>
