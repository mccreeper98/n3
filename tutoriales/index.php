<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tutoriales</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../favicon.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/home.css" media="none" onload="if(media!='all')media='all'">
	<link rel="stylesheet" type="text/css" href="../css/materialize.css" media="none" onload="if(media!='all')media='all'">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery.js" ></script>
	<script type="text/javascript" src="../js/materialize.min.js" ></script>
</head>
<body>
<!--Inicio de la barra de navegacion-->
	<div class="navbar-fixed">
					<nav>
					<div class="nav-wrapper">
					<?php	
						if (isset($_SESSION['Comprador'])) {
							$arreglo=$_SESSION['Comprador'];

							$usu=$arreglo[0]['Nombre'];
					?>

					<a href="../index.php" id="Logo" class="brand-logo left" title="Inicio"><img src="../img/buenFin.png" height="50px">n³</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
						<ul  id="enlaces_menu" class="hide-on-med-and-down">
							<li><a href="../catalogo/index.php">Tienda</a></li>
							<li><a href="../ofertas/index.php">Ofertas</a></li>
							<li><a href="index.php">Tutoriales</a></li>	
							<ul id="" class="hide-on-med-and-down right">	
								<li><a href="../carrito/index.php" id="BotonCarrito" title="Ver Carrito de Compras"><img height="50px" src="../img/carrito.png"></a></li>
								<li><a href="../perfil.php" id="BotonSignUp"><?php echo $usu; ?></a></li>
								<li><a href="../cerrar.php" id="BotonLogin">Cerrar sesión</a></li>				
							</ul>		
						</ul>

						<ul class="side-nav" id="mobile-demo">
							<a href="../carrito/index.php" id="BotonCarrito"><img height="50px" src="../img/carrito.png"></a>
							<li><a href="../perfil.php" id="BotonSignUp"><?php echo $usu; ?></a></li>
							<li><a href="../catalogo/index.php">Tienda</a></li>
							<li><a href="../ofertas/index.php">Ofertas</a></li>	
							<li><a href="index.php">Tutoriales</a></li>
							<li><a href="../cerrar.php" id="BotonLogin">Cerrar de sesión</a></li>
						</ul>
	
					</div>		
				</nav>	
			</div>
			<script type="text/javascript">$(".button-collapse").sideNav();</script>

					<?php
						}else{ ?>
						<a href="../index.php" id="Logo" class="brand-logo left" title="Inicio"><img src="../img/buenFin.png" height="50px">n³</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
						<ul  id="enlaces_menu" class="hide-on-med-and-down">
							<li><a href="../catalogo/index.php">Tienda</a></li>
							<li><a href="../ofertas/index.php">Ofertas</a></li>
							<li><a href="index.php">Tutoriales</a></li>	
							<ul id="" class="hide-on-med-and-down right">	
								<li><a href="../carrito/index.php" id="BotonCarrito" title="Ver Carrito de Compras"><img height="50px" src="../img/carrito.png"></a></li>
								<li><a href="../SignUp.php" id="BotonSignUp">Registrate</a></li>
								<li><a href="../Login.php" id="BotonLogin">Inicio de sesión</a></li>				
							</ul>		
						</ul>

						<ul class="side-nav" id="mobile-demo">
						|	<a href="../carrito/index.php" id="BotonCarrito"><img height="50px" src="../img/carrito.png"></a>	
							<li><a href="../SignUp.php" id="BotonSignUp">Registrate</a></li>		
							<li><a href="../Login.php" id="BotonLogin">Inicio de sesión</a></li>	
							<li><a href="../catalogo/index.php">Tienda</a></li>
							<li><a href="../ofertas/index.php">Ofertas</a></li>	
							<li><a href="index.php">Tutoriales</a></li>
						</ul>
	
					</div>		
				</nav>	
			</div>
			<script type="text/javascript">$(".button-collapse").sideNav();</script>
					<?php
						}
					?>	
			<!-- Fin de la barra de navegacion-->

	<!--Tutos -->
<div>
	<div class="container">
		<div class="row">
			<br>
			<br>
			<div class="col l12 m12 s12">
				<h5>Cubos 3x3</h5>
			</div>
			<div class="col l6 m12 s12">
				<iframe width="100%" height="480" src="https://www.youtube.com/embed/GyY0OxDk5lI" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col l6 m12 s12">
				<p>
				<br>
					<ul>
						- Introducción: 0:37<br>
						- Paso 1 (Cruz primera capa): 5:18<br>
						- Paso 2 (Esquinas primera capa): 9:51<br>
						- Paso 3 (Aristas segunda capa): 16:04<br>
					</ul>

				*Colocarla a la izquierda: D L D' L' D' F' D F<br>
				*Colocarla a la derecha: D' R' D R D F D' F'<br>

				- Paso 4 (Cruz tercera capa): 22:38<br>

				*Algoritmo: F R U R' U' F' (Repetir hasta conseguir cruz)<br>

				- Paso 5 (Casar cruz con centros): 27:00<br>

				*Algoritmo: R' U' R U' R' 2U R U'<br>

				- Paso 6 (Colocar esquinas tercera capa): 30:50<br>

				*Algoritmo: U R U' L' U R' U' L<br>

				- Paso 7 (Orientar esquinas tercera capa): 34:09<br>

				*Algoritmo: R' D' R D (Repetir hasta orientar bien la esquina)<br>
				</p>
			</div>
			<h3 class="col l12 m12 s12">¿Estas listo para practicar lo aprendido?</h3>
			<div class="col l12 m12 s12">
				<img src="img/ctrl.png" width="100%">
				<font class="right">©2013 Google</font>
			</div>

			<div id="armar cubo" class="col l12 m12 s12">
				<iframe scrolling="no"  name="window" src="https://www.google.com/logos/2014/rubiks/iframe/index.html" width="100%" height="600" marginwidth="0" scrolling="yes" frameborder="0"></iframe>
				<br>
				<h4>¡Compra ahora! <font size="5" class="right"><a class="waves-effect waves-light btn-large" href="../catalogo/index.php">¡Comprar!</a></font></h4>
			</div>
			<br>
			
	
		</div>
	</div>
</div>


	<!-- Tutos -->

	<!-- Footer -->
		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col l4 m6 s6">
						<h class="white-text"><a href="index.php"><h1 class="white-text">n³</h1></a></h>
							<h6 class="white-text">Siguenos en:</h6>
							<br>
							<a class="grey-text text-lighten-3" href="https://www.facebook.com/enealcubon3"><img src="../icons/fb.png" height="64px"></a>
							<br> 
							<a class="grey-text text-lighten-3" href="https://twitter.com/enealcubon3"><img src="../icons/tw.png" height="64px"></a>
							<br> 
							<a class="grey-text text-lighten-3" href="https://www.instagram.com/enealcubon3/"><img src="../icons/ig.png" height="64px"></a>				
					</div>
					<div class="col l4 m6 s6">
					<br>
				 <h5 class="white-text">Más</h5>
				 <br>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Aviso de privacidad</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Preguntas frecuentes</a></li>
                  <li><a class="grey-text text-lighten-3" href="../empresa/index.php">Empresa</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Terminos de uso</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Proveedores</a></li>
                </ul>
					</div>
					<div class="col l4 m12 s12">
						<form name="contacto" action="" method="POST">
							<p class="grey-text text-lighten-4"><h4 class="white-text">Contacto: </h4></p>
							<font color="white"><input type="text" name="" placeholder="Nombre"></font>
							<font color="white"><input type="text" name="" placeholder="Correo"></font>
							<font color="white"><input type="text" name="" placeholder="Asunto"></font>
							<font color="white"><textarea name="Mensaje" rows="10" cols="40" placeholder="Escribe tus comentarios..."></textarea></font>
							<br>
							<br>
							<button class="btn waves-effect waves-light" type="submit" name="action" id="Enviar">Enviar
								<i class="material-icons right">send</i>
							</button>
						</form>
					</div>
				</div>
			</div>

			<div class="footer-copyright">
				<div class="container">
					© 2016 Bugisoft
					<a class="grey-text text-lighten-4 right" href="index.php">Inicio</a>
				</div>
			</div>
		</footer>

		<!-- Footer -->
</body>
</html>