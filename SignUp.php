<!DOCTYPE html>
<html>
<head>
	<title>Registrate</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<!-- Carga asincronida media="none" onload="if(media!='all')media='all'"-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" async src="js/validacionessignup.js"></script>
	<script type="text/javascript" async src="js/jquery.js"></script>
	<script type="text/javascript" async src="js/fbsignup.js"></script>
	<script type="text/javascript" async src="js/materialize.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">	
			<div class="s12 m12 l12 center">
				<a href="index.php"><h1>n³</h1></a>
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
						<button class="waves-effect waves-light btn-large center" type="submit" name="enviar" id="btn_signupfacebook">REGISTRATE CON FACEBOOK
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

			<!-- Registrar cuenta -->
			<div class="col s0 m0 l3"></div>
			<div class="col s12 m12 l6 "  id="signup ">
				<form name="signup" method="post" action="cuenta.php" onsubmit="return validar();">
					<br><label><h4>Registra una cuenta nueva:</h4></label>
					<br><label>Nombre(s)</label>
					<input type="text" name="nombre" id="nombre">
					<div class="col s6">
						<label>Apellido Paterno</label>
						<input type="text" name="apellidopaterno" id="apellidopaterno">	
					</div>
					<div class="col s6">
						<label>Apellido Materno</label>
						<input  type="text" name="apellidomaterno" id="apellidomaterno">
					</div>
					<label>Genero</label><br><br>
					<input name="Genero" type="radio" id="Masculino" />
					<label for="Masculino">Masculino</label>
					<input name="Genero" type="radio" id="Femenino" />
					<label for="Femenino" class="right">Femenino</label><br><br>
					<label class="col s12 m12 l12">Fecha de nacimiento: DD/MM/YYYY</label>
					<div class="col s4 m4 l4">
						<input type="text" name="day" id="day" placeholder="Día">
					</div>	 
					<select id="opc" class="browser-default col s4 m4 l4">
						<option value="0" disabled selected>Mes</option>
						<option value="01">Enero</option>
						<option value="02">Febrero</option>
						<option value="03">Marzo</option>
						<option value="04">Abril</option>
						<option value="05">Mayo</option>
						<option value="06">Junio</option>
						<option value="07">Julio</option>
						<option value="08">Agostp</option>
						<option value="09">Septiembre</option>
						<option value="10">Octubre</option>
						<option value="11">Noviembre</option>
						<option value="12">Diciembre</option>
					</select>	
					<div class="col s4 m4 l4">
						<input type="text" name="year" id="year" placeholder="Año">
					</div>					
					<div class="col s6 m6 l6">
						<label>Telefono</label>
						<input type="text" name="telefono" id="telefono">
					</div>
					<div class="col s6 m6 l6">
						<label>Correo</label>
						<input type="text" name="correo" id="correo">
					</div>
					<div class="col s6 m6 l6">
						<label>Contraseña:</label>
						<input type="password" name="pass" id="pass" size="30" >
					</div>
					<div class="col s6 m6 l6">
						<label>Confirma contraseña:</label>
						<input type="password" name="pass2" id="pass2" size="30" >
					</div>
					<div class="center col s12 m12 l12">	
						<br>
						<button class="btn waves-effect waves-light left" type="submit" name="enviar">Enviar
							<i class="material-icons right">send</i>
						</button>

						<button class="btn waves-effect waves-light right" type="reset" name="enviar">Restablecer</button>
						
					</div>

				</form>	
				<p class="col s12 m12 l12 center"><h6 class="center">¿Ya tienes una cuenta? <a href="Login.php">Iniciar sesión</a> </h6></p>
			</div>

			<!-- Fin registrar cuenta -->	
		</div>
	</div>
</body>
</html>

