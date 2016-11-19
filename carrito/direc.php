<!DOCTYPE html>
<html>
<head>
	<title>Datos de envio<</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../favicon.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/home.css" media="none" onload="if(media!='all')media='all'">
	<link rel="stylesheet" type="text/css" href="../css/materialize.css" media="none" onload="if(media!='all')media='all'">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script src="../dist/sweetalert.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="../dist/sweetalert.css">

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

	<!-- direccion carrito-->
	
	<div class="container">
		<div class="row">
			<form class="col l12 m12  s12" method="post" action="">
				<h4>Datos de envio</h4>
				<div class="col s12 m6 l6">
					<label>Nombre</label>
					<input type="text" name="nombre" placeholder="Nombre">
				</div>
				<div class="col s12 m6 l6">
					<label>Apellido</label>
					<input type="text" name="apellido" placeholder="Apellido">
				</div>
				<div class="col s6 m6 l6">
					<label>Pais</label>
					<input type="text" name="pais" placeholder="Pais">
				</div>
				<div class="col s6 m6 l6">
					<label>Ciudad</label>
					<input type="text" name="ciudad" placeholder="Ciudad">
				</div>
				<div class="col s12 m8 l8">
					<label>Calle</label>
					<input type="text" name="calle" placeholder="Calle">
				</div>
				<div class="col s6 m2 l2">
					<label>#ext</label>
					<input type="text" name="numext" placeholder="#ext">
				</div>
				<div class="col s6 m2 l2">
					<label>#int</label>
					<input type="text" name="numint" placeholder="#int">
				</div>	
				<div class="col s12 m6 l6">
					<label>Colonia</label>
					<input type="text" name="col" placeholder="Colonia">
				</div>
				<div class="col s6 m3 l3">
					<label>C.P.</label>
					<input type="text" name="cp" placeholder="C.P.">
				</div>
				<div class="col s6 m3 l3">
					<label>Telefono</label>
					<input type="text" name="tel" placeholder="Telefono">
				</div>
				<div class="right">
					<h4><font size="2"><a class="waves-effect waves-light btn-large" href="ok.php">Continuar</a>
					</div>
				</form>
			</div>
		</div>
		

		<!-- ok -->
		<script type="text/javascript">	
			function JSalert(){
 sweetAlert("Oops...", "Something went wrong!", "error");
 
}
		</script>

		<input type="submit" name="" onclick="JSalert ()">


		<!-- ok -->



	</body>
	</html>