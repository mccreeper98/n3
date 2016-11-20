<?php
session_start();
include '../conexion.php';
if (isset($_SESSION['carrito'])) {
	if(isset($_GET['id'])){
		$arreglo=$_SESSION['carrito'];
		$encontro=false;
		$numero=0;
		for ($i=0; $i < count($arreglo); $i++) { 
			if ($arreglo[$i]['Id']==$_GET['id']) {
				$encontro=true;
				$numero=$i;
			}
		}
		if($encontro==true){
			$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
			$_SESSION['carrito']=$arreglo;
		}
		else{

			$nombre="";
			$precio=0;
			$imagen="";
			$re=mysql_query("select * from producto where idProd =".$_GET['id'])or die(mysql_error());
			while ($f=mysql_fetch_array($re)) {
				$nombre=$f['desProd'];
				$precio=$f['preProd'];
				$imagen=$f['imgProd'];
			}
			$datosNuevos=array('Id'=>$_GET['id'],
				'Nombre'=>$nombre,
				'Precio'=>$precio,
				'Imagen'=>$imagen,
				'Cantidad'=>1);
			array_push($arreglo, $datosNuevos);
			$_SESSION['carrito']=$arreglo;
		}
	}
}	
else{
	if (isset($_GET['id'])) {
		$nombre="";
		$precio=0;
		$imagen="";
		$re=mysql_query("select * from producto where idProd =".$_GET['id'])or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
			$nombre=$f['desProd'];
			$precio=$f['preProd'];
			$imagen=$f['imgProd'];
		}
		$arreglo[]=array('Id'=>$_GET['id'],
			'Nombre'=>$nombre,
			'Precio'=>$precio,
			'Imagen'=>$imagen,
			'Cantidad'=>1);
		$_SESSION['carrito']=$arreglo;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Carrito</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../favicon.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/materialize.css" media="none" onload="if(media!='all')media='all'">
	<link rel="stylesheet" type="text/css" href="../css/home.css" media="none" onload="if(media!='all')media='all'">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/can.js"></script>
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


				<?php
				$total=0;
				if(isset($_SESSION['carrito'])){
					$datos=$_SESSION['carrito'];
					
					for ($i=0; $i < count($datos); $i++) { 
						?>

						<div class="col s12 m12">
							<div class="producto">
								<div class="card horizontal hoverable">
									<div class="card-image">
										<img src="../catalogo/images/<?php echo $datos[$i]['Imagen'];?>" id="imagenProducto">
									</div>
									<div class="card-stacked">
										<div class="card-content">
											<div class="col l6 m6 s12">
												<h5> <?php echo $datos[$i]['Nombre']; ?> </h5>
												<h6>Cantidad: </h6>
												<input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
												<l data-precio="<?php echo $datos[$i]['Precio'];?>"
													<l data-id="<?php echo $datos[$i]['Id'];?>"
														<l class="cantidad">  
														</div>
														<div class="col l6 m6 s12">
															<h5>Precio: $<?php echo $datos[$i]['Precio']; ?> </h5>
														</div>
													</div>
													<h5 class="subtotal">SubTotal: $<?php echo $datos[$i]['Precio']*$datos[$i]['Cantidad']; ?> <h5>
														<div class="card-action">
															<h5><a href="#">Quitar</a></h5>
														</div>
													</div>
												</div>
											</div>
										</div>

										<?php
										$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
									}
								}
								else{
									echo '
									<div class="col s12 m12 center hoverableo>
									<div class="card-panel white">
									<span class="black-text">
										<h4>El carrito esta vacio </h4>
										<h6>Ve a la tienda para agregar productos :D </h6>
										</span>
									</div>
								</div>';
							}

							echo 

								'<div class="right">
									
									<span class="black-text">
										<h5>Total:</h5><h3 id="total" class="right" ><font> $</font>'.$total.'</h3>
										</span>
									
								</div>'

							;

							?>
							<div class="col s12 m12 l12">
								<!-- Producto -->	
								<a href="../catalogo/index.php" class="waves-effect waves-light btn-large">Regresar a la tienda</a>

								<?php
								if ($total!=0) {

									?>
									<div class="right">
										<font size="2"><a class="waves-effect waves-light btn-large" href="compras.php">Comprar</a>
										</div>
										<?php
									}
									?>
								</div>
							</div>
						</div>

						<!-- Productos carrito -->

					</body>
					</html>