<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesión</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css" > <!-- Carga asincronida media="none" onload="if(media!='all')media='all'"-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" async src="js/jquery.js"></script>
	<script type="text/javascript" async src="js/validacioneslogin.js"></script>
	<script type="text/javascript" async src="js/fblogin.js"></script>
	<script type="text/javascript" async src="js/materialize.min.js"></script>

</head>
<body>
	<!-- Formularios-->
	<div class="container" id="login_form ">
		<div class="row">
		<div class="col s12 m12 l12">		
			<center><a href="index.php"><h1>n³</h1></a></center>
		</div>

			<!-- Facebook login-->

			<script type="text/javascript">
				// Load the SDK FACEBOOK asynchronously
				(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_US/sdk.js";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>

			<div class="col s12 m12 l12" id="FacebookLogin">
				<div class="col s0 m3 l3"></div>
				<div class="col s12 m6 l6">
						<button class="waves-effect waves-light btn-large center" type="submit" name="enviar" id="btn_loginfacebook">INICIA CON FACEBOOK
						<i class="material-icons right">send</i>
						</button>	
				</div>
				<div class="col s0 m3 l3"></div>
			</div>

			<!--FIN Facebook login-->

			<div class="col s12 m12 l12">
				<br>
				<hr width="50%">
			</div>



			<div class="col s12 m12 l12">
			</div>
			<!-- login cuenta  -->
			<div class="s12 m12 l12">
				<div class="col s0 m2 l3"></div>
				<div class="col s12 m8 l6 " id="login">
					<form name="login" method="post" action="cuenta.php" onsubmit="return validar();">
						<br><label>Correo:</label>
						<input type="text" name="mail" id="mail" size="30">
						<br><label>Contraseña:</label>
						<input type="password" name="pass" id="pass" size="30" >
						<br>
						<button class="btn waves-effect waves-light left" type="submit" name="enviar">Enviar
							<i class="material-icons right">send</i>
						</button>
						<button class="btn waves-effect waves-light right" type="reset" name="enviar">Restablecer</button>
						<br><br>
						<p class="center">¿No tienes cuenta? <a href="SignUp.php">Regístrate</a> </p>
						<br>
						<br>
					</form>
				</div>
				<div class="col s0 m2 l3"></div>	
			</div>
	<!-- Fin login cuenta  -->

		</div>
	</div>
	<!-- Formularios-->

</body>
</html>
