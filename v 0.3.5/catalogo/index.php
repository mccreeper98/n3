<!DOCTYPE html>
<html>
<head>
	<title>Catálogo</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../favicon.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/home.css" media="none" onload="if(media!='all')media='all'">
	<link rel="stylesheet" type="text/css" href="../css/materialize.css" media="none" onload="if(media!='all')media='all'">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<!--		<script type="text/javascript">
				function yHandler(){
			// Watch video for line by line explanation of the code
			// http://www.youtube.com/watch?v=eziREnZPml4
			var wrap = document.getElementById('wrap');
			var contentHeight = wrap.offsetHeight;
			var yOffset = window.pageYOffset; 
			var y = yOffset + window.innerHeight;
			if(y >= contentHeight){
				// Ajax call to get more dynamic data goes here
			wrap.innerHTML += '<div class="col s12 m6 l3"> <div class="card"> <div class="card-image waves-effect waves-block waves-light"> <img class="activator" src="img/producto1.jpg" width="500"> </div> <div class="card-content"> <span class="card-title activator grey-text text-darken-4">Nombre producto<i class="material-icons right">more_vert</i></span> <p><a href="#"><h5>COMPRAR</h5></a></p> </div> <div class="card-reveal"> <span class="card-title grey-text text-darken-4">Nombre producto<i class="material-icons right">close</i></span> <p>Here is some more information about this product that is only revealed once clicked on.</p> </div> </div> </div> '; 
		}
				var status = document.getElementById('status');
				status.innerHTML = contentHeight+" | "+y;
			}
			window.onscroll = yHandler;
		</script> -->
</head>
<body>

	<!--Inicio de la barra de navegacion-->
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<a href="../index.php" id="Logo" class="brand-logo left"><img src="../img/buenFin.png" height="50px">n³</a><a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
				<ul  id="enlaces_menu" class="hide-on-med-and-down">
					<li><a href="../catalogo/index.php">Tienda</a></li>
					<li><a href="../ofertas/index.php">Ofertas</a></li>
					<li><a href="../tutoriales/index.php">Tutoriales</a></li>
					<ul id="" class="hide-on-med-and-down right">	
						<li><a href="../carrito/index.php" id="BotonCarrito"><img height="50px" src="../img/carrito.png"></a></li>
						<li><a href="../SignUp.php" id="BotonSignUp">Registrate</a></li>
						<li><a href="../Login.php" id="BotonLogin">Inicio de sesión</a></li>				
					</ul>		
				</ul>

				<ul class="side-nav" id="mobile-demo">
					<li><a href="../catalogo/index.php">Tienda</a></li>
					<li><a href="../carrito/index.php" id="BotonCarrito"><img height="50px" src="../img/carrito.png"></a></li>
					<li><a href="../SignUp.php" id="BotonSignUp">Registrate</a></li>		
					<li><a href="../Login.php" id="BotonLogin">Inicio de sesión</a></li>	
					<li><a href="../ofertas/index.php">Ofertas</a></li>	
					<li><a href="../tutoriales/index.php">Tutoriales</a></li>
				</ul>
			</div>		
		</nav>	
	</div>
	<script type="text/javascript">$(".button-collapse").sideNav();</script>
	<!-- Fin de la barra de navegacion-->

	<!-- parallax --> 
	<script type="text/javascript">
		$(document).ready(function(){
			$('.parallax').parallax();
		});
	</script>

	<div id="parallax">
		<div class="parallax-container">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12">
						<div class="caption left-align">
							<br><br><br><br><br><br><br><br><br><br>
							<h3 class="white-text">La tienda de los <br> profesionales del <br> Rubik</h3>
							<h5 class="light grey-text text-lighten-3">¡Productos de calidad!</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="parallax"><img src="../img/para.jpg"></div>
		</div>
	</div>
	<style type="text/css"> .parallax-container {
		height: "600";
	}</style>

	<!-- fin parallax -->

	<!-- novedades -->

	<div id="novedades" class="row">

		<div class="container">

			<div class="col s12 m12 l12">
				<div id="botonesnovedades">
					<br>
					<br>
					<a class="waves-effect waves-light btn">Novedades</a>
					<br>
					<br>
				</div>

				<div id="novedadesprincipales">
					<!-- novedad -->
					<div  class="col s6 m3 l3">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="img/novedad1.jpg">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">$500<i class="material-icons right">more_vert</i></span>
								<p><a href="#">COMPRAR</a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Marca<i class="material-icons right">close</i></span>
								<p>Descripcion</p>
							</div>
						</div>
					</div>
					<!-- novedad -->
					<!-- novedad -->
					<div  class="col s6 m3 l3">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="img/novedad2.jpg">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">$500<i class="material-icons right">more_vert</i></span>
								<p><a href="#">COMPRAR</a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Marca<i class="material-icons right">close</i></span>
								<p>Descripcion</p>
							</div>
						</div>
					</div>
					<!-- novedad -->
					<!-- novedad -->
					<div  class="col s6 m3 l3">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="img/novedad3.jpg">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">$500<i class="material-icons right">more_vert</i></span>
								<p><a href="#">COMPRAR</a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Marca<i class="material-icons right">close</i></span>
								<p>Descripcion</p>
							</div>
						</div>
					</div>
					<!-- novedad -->
					<!-- novedad -->
					<div  class="col s6 m3 l3">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="img/novedad4.jpg">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">$500<i class="material-icons right">more_vert</i></span>
								<p><a href="#">COMPRAR</a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Marca<i class="material-icons right">close</i></span>
								<p>Descripcion</p>
							</div>
						</div>
					</div>
					<!-- novedad -->
				</div>
			</div>
		</div>
	</div>
	<!-- novedades -->

	<div id="wrap">
		<!-- productos -->

		<div class="container">
			<div class="row">

				<!-- producto -->
				<div class="col s12 m6 l3">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/producto1.jpg" width="500">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Nombre producto<i class="material-icons right">more_vert</i></span>
							<p><a href="#"><h5>COMPRAR</h5></a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Nombre producto<i class="material-icons right">close</i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>			
				</div>
				<!-- producto-->

					<!-- producto -->
				<div class="col s12 m6 l3">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/producto1.jpg" width="500">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Nombre producto<i class="material-icons right">more_vert</i></span>
							<p><a href="#"><h5>COMPRAR</h5></a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Nombre producto<i class="material-icons right">close</i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>			
				</div>
				<!-- producto-->
					<!-- producto -->
				<div class="col s12 m6 l3">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/producto1.jpg" width="500">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Nombre producto<i class="material-icons right">more_vert</i></span>
							<p><a href="#"><h5>COMPRAR</h5></a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Nombre producto<i class="material-icons right">close</i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>			
				</div>
				<!-- producto-->
						<!-- producto -->
				<div class="col s12 m6 l3">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/producto1.jpg" width="500">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Nombre producto<i class="material-icons right">more_vert</i></span>
							<p><a href="#"><h5>COMPRAR</h5></a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Nombre producto<i class="material-icons right">close</i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>			
				</div>
				<!-- producto-->


			</div>
		</div>
		<!-- productos -->
	</div>

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