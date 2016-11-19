	<!DOCTYPE html>
	<html>
	<head>
		<title>Compra cubos rubik</title>
		<link rel="shortcut icon" href="favicon.png" />
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/home.css" media="none" onload="if(media!='all')media='all'">
		<link rel="stylesheet" type="text/css" href="css/materialize.css" media="none" onload="if(media!='all')media='all'">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script type="text/javascript"  src="js/jquery.js"></script>
		<script type="text/javascript"  src="js/materialize.min.js"></script>

	</head>
	<body>
			<!--Inicio de la barra de navegacion-->
			<div class="navbar-fixed">
				<nav>
					<div class="nav-wrapper">
						<a href="index.php" id="Logo" class="brand-logo left" title="Inicio"><img src="img/buenFin.png" height="50px">n³</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
						<ul  id="enlaces_menu" class="hide-on-med-and-down">
							<li><a href="catalogo/index.php">Tienda</a></li>
							<li><a href="ofertas/index.php">Ofertas</a></li>
							<li><a href="tutoriales/index.php">Tutoriales</a></li>	
							<ul id="" class="hide-on-med-and-down right">	
								<li><a href="carrito/index.php" id="BotonCarrito" title="Ver Carrito de Compras"><img height="50px" src="img/carrito.png"></a></li>
								<li><a href="SignUp.php" id="BotonSignUp">Registrate</a></li>
								<li><a href="Login.php" id="BotonLogin">Inicio de sesión</a></li>				
							</ul>		
						</ul>

						<ul class="side-nav" id="mobile-demo">
							<li><a href="catalogo/index.php">Tienda</a></li>
							<a href="carrito/index.php" id="BotonCarrito"><img height="50px" src="img/carrito.png"></a>	
							<li><a href="SignUp.php" id="BotonSignUp">Registrate</a></li>		
							<li><a href="Login.php" id="BotonLogin">Inicio de sesión</a></li>	
							<li><a href="ofertas/index.php">Ofertas</a></li>	
							<li><a href="tutoriales/index.php">Tutoriales</a></li>
						</ul>
					</div>		
				</nav>	
			</div>
			<script type="text/javascript">$(".button-collapse").sideNav();</script>
			<!-- Fin de la barra de navegacion-->

			<noscript>
				<center>
				<h5><p>ATENCIÓN</p></h5>
				<font color="red"><h5><p>La página que estás viendo requiere para su funcionamiento el uso de JavaScript. 
				Si lo has deshabilitado intencionadamente, por favor vuelve a activarlo.</p></h5></font>
				</center>
			</noscript>
			<!--  Inicio del  slide -->
			<div>
				<div class="slider">
					<ul class="slides">
						<li>
							<img src="img/slide1.jpg"> 
							<div class="caption center-align">
								<h3>Al final...¡Encajan!</h3>
								<h5 class="light grey-text text-lighten-3">Ediciones especiales 3x3</h5>
								<a class="waves-effect waves-light btn ">Comprar</a>
							</div>
						</li>
						<li>
							<img src="img/slide2.jpg"> 
							<div class="caption left-align">
								<h3>Uniendo pieza a pieza.</h3>
								<h5 class="light grey-text text-lighten-3">Productos de calidad en n³</h5>
							</div>
						</li>
						<li>
							<img src="img/slide3.jpg"> 
							<div class="caption right-align">
								<h3>Descuentos de verano</h3>
								<h5 class="light grey-text text-lighten-3">Descubre todo lo que tenemos</h5>
							</div>
						</li>
						<li>
							<img src="img/slide4.jpg"> 
							<div class="caption left-align">
								<h3 class="black-text">Móntatelo como quieras</h3>
								<h5 class="light black-text text-lighten-3">Cubos personalizados</h5>
							</div>
						</li>
					</ul>
				</div>	
			</div>
			<script type="text/javascript">

				$(document).ready(function(){
					$('.slider').slider({full_width: true});
				});
			</script>

			<!-- Fin del slide -->


			<!--Inicio contenido -->
			<div id="contenido">
				<div id="servicios" class="col s12 m12 l12">
					<div class="row center">
						<div id="info" class="col s12 m6 l3 center">
							<img src="icons/carro.png" class="responsive-img">
							<br>Compra
						</div>
						<div id="info" class="col s12 m6 l3 center">
							<img src="icons/tarjeta.png" class="responsive-img">
							<br>
							Paga
						</div>

						<div id="info" class="col s12 m6 l3 center">
							<img src="icons/camion.png" class="responsive-img">
							<br>
							Espera
						</div>	
						<div id="info" class="col s12 m6 l3 center">
							<img src="icons/buzon.png" class="responsive-img">
							<br>
							Disfruta
						</div>		
					</div>	
				</div>
				<div id="productos">
					<div class="container">
						<div class="row">
							<div id="separador" class="col s12 m12 l12"></div>
							<div id="ofertas" class="col s6  m6 l6  left">
								Ofertas
							</div>
							<div id="masofertas" class="col s6  m6 l6 right">
								<a href="ofertas/index.php">Todas las ofertas</a>
							</div>
							<div class="row">
								<!--Proucto 1-->
								<div class="col s12 m6 l3">
									<div class="card">
										<div class="card-image waves-effect waves-block waves-light">
											<img class="activator" src="img/producto/p1.jpg">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4">$500<i class="material-icons right">more_vert</i></span>
											<p><a href="#"><h5>COMPRAR</h5></a></p>
										</div>
										<div class="card-reveal">
											<span class="card-title grey-text text-darken-4">Marca<i class="material-icons right">close</i></span>
											<p>Descripcion</p>
										</div>
									</div>
								</div>
								<!--Proucto 2-->
								<div class="col s12 m6 l3">
									<div class="card">
										<div class="card-image waves-effect waves-block waves-light">
											<img class="activator" src="img/producto/p2.jpg">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4">$500<i class="material-icons right">more_vert</i></span>
											<p><a href="#"><h5>COMPRAR</h5></a></p>
										</div>
										<div class="card-reveal">
											<span class="card-title grey-text text-darken-4">Marca<i class="material-icons right">close</i></span>
											<p>Descripcion</p>
										</div>
									</div>
								</div>
								<!--Proucto 3-->
								<div class="col s12 m6 l3">
									<div class="card">
										<div class="card-image waves-effect waves-block waves-light">
											<img class="activator" src="img/producto/p3.jpg">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4">$500<i class="material-icons right">more_vert</i></span>
											<p><a href="#"><h5>COMPRAR</h5></a></p>
										</div>
										<div class="card-reveal">
											<span class="card-title grey-text text-darken-4">Marca<i class="material-icons right">close</i></span>
											<p>Descripcion</p>
										</div>
									</div>
								</div>
								<!--Proucto 4-->
								<div class="col s12 m6 l3">
									<div class="card">
										<div class="card-image waves-effect waves-block waves-light">
											<img class="activator" src="img/producto/p4.jpg">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4">$500<i class="material-icons right">more_vert</i></span>
											<p><a href="#"><h5>COMPRAR</h5></a></p>
										</div>
										<div class="card-reveal">
											<span class="card-title grey-text text-darken-4">Marca<i class="material-icons right">close</i></span>
											<p>Descripcion</p>
										</div>
									</div>
								</div>
								<!--Fin productos -->
							</div>
							<h4>¡Compra ahora! <font size="5" class="right"><a class="waves-effect waves-light btn-large" href="../catalogo/index.php">¡Comprar!</a></font></h4>
							<br>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Fin contenido -->


		<!-- Footer -->
		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col l4 m6 s6">
						<h class="white-text"><a href="index.php"><h1 class="white-text">n³</h1></a></h>
							<h6 class="white-text">Siguenos en:</h6>
							<br>
							<a class="grey-text text-lighten-3" href="https://www.facebook.com/enealcubon3"><img src="icons/fb.png" height="64px"></a>
							<br> 
							<a class="grey-text text-lighten-3" href="https://twitter.com/enealcubon3"><img src="icons/tw.png" height="64px"></a>
							<br> 
							<a class="grey-text text-lighten-3" href="https://www.instagram.com/enealcubon3/"><img src="icons/ig.png" height="64px"></a>				
					</div>
					<div class="col l4 m6 s6">
					<br>
				 <h5 class="white-text">Más</h5>
				 <br>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Aviso de privacidad</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Preguntas frecuentes</a></li>
                  <li><a class="grey-text text-lighten-3" href="empresa/index.php">Empresa</a></li>
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




