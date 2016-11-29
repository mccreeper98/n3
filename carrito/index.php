<!DOCTYPE html>
<html>
<head>
	<title>Carrito</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../favicon.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/home.css" media="none" onload="if(media!='all')media='all'">
	<link rel="stylesheet" type="text/css" href="../css/materialize.css" media="none" onload="if(media!='all')media='all'">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>

</head>
<body>
	<!--Inicio de la barra de navegacion-->
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<a href="../index.php" id="Logo" class="brand-logo left">n³</a><a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
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

	<!-- Productos carrito -->
	<div>
		<div class="container">
			<div class="row">
				<h4 class="header">Carrito de compras</h4>
				<!-- Producto -->	
				<div class="col s12 m12">
					<div class="card horizontal">
						<div class="card-image">
							<img src="img/noimg.png" width="20%">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<div class="col l6 m6 s12">
									<h5>Producto</h5>
									<h6>Cantidad</h6>
								</div>
								<div class="col l6 m6 s12">
									<h5>Precio</h5>
								</div>
							</div>
							<div class="card-action">
								<h5><a href="#">Quitar</a></h5>
							</div>
						</div>
					</div>
				</div>

				<!-- Producto -->	
				<div class="right">
				<h4><font size="2"><a class="waves-effect waves-light btn-large" href="direc.php">Continuar</a>
					</div>
				</div>
			</div>

			<!-- Productos carrito -->

		</body>
		</html>