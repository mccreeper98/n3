<!DOCTYPE html>
<html>
<head>
	<title>Registrar Administrador</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../favicon.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
	<!-- Carga asincronida media="none" onload="if(media!='all')media='all'"-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" async src="../js/validacionessignup.js"></script>
	<script type="text/javascript" async src="../js/jquery.js"></script>
	<script type="text/javascript" async src="../js/materialize.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">	
			<div class="s12 m12 l12 center">
				<a href="../index.php"><h1>n³</h1></a>
			</div>
			<div class="col s12 m12 l12">
				<br>
				<hr width="50%">
			</div>

			<!-- Registrar cuenta -->
			<div class="col s0 m0 l3"></div>
			<div class="col s12 m12 l6 "  id="signup ">
				<form name="signup" method="post" action="subir.php" onsubmit="return validar();">
					<br><label><h4>Registrar Administrador:</h4></label>
					<br><label>Nombre</label>
					<input type="text" name="nombre" id="nombre">
					<div class="col s6">
						<label>Apellido Paterno</label>
						<input type="text" name="apellido" id="apellidopaterno">	
					</div>
					<div class="col s6">
						<label>Apellido Materno</label>
						<input  type="text" name="apellidomaterno" id="apellidomaterno">
					</div>	 						
					<div class="col s6 m6 l6">
					<label>Usuario</label>
					<input type="text" name="user" id="user">
					</div>
					<div class="col s6 m6 l6">
						<label>Correo</label>
						<input type="text" name="correo" id="correo">
					</div>
					<div class="col s6 m6 l6">
						<label>Contraseña:</label>
						<input type="password" name="password" id="pass" size="30" >
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

			</div>

			<!-- Fin registrar cuenta -->	
		</div>
	</div>
</body>
</html>

