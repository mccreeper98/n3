<?php

session_start();
include '../conexion.php';
if (isset($_SESSION['Usuario'])) {

}else{
	header("Location: index.php?Error=Acceso denegado");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pedidos</title>
	<link rel="shortcut icon" href="../favicon.png" />
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/home.css" media="none" onload="if(media!='all')media='all'">
	<link rel="stylesheet" type="text/css" href="../css/materialize.css" media="none" onload="if(media!='all')media='all'">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript"  src="../js/jquery.js"></script>
	<script type="text/javascript"  src="../js/materialize.min.js"></script>
</head>
<body>

	<!--Inicio de la barra de navegacion-->
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<a href="../index.php" id="Logo" class="brand-logo left">n³</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
				<ul  id="enlaces_menu" class="hide-on-med-and-down">
					<li><a href="../index.php"><h5>Administración</h5></a></li>
					<ul id="" class="hide-on-med-and-down right">	
						<li><a href="registro.php" id="BotonSignUp">Registrar Administrador</a></li>
						<li><a href="cerrar.php" id="BotonLogin">Cerrar sesión</a></li>				
					</ul>		
				</ul>

				<ul class="side-nav" id="mobile-demo">
					<li><a href="../index.php">Administración</a></li>
					<li><a href="registro.php" id="BotonSignUp">Registrar Administrador</a></li>
					<li><a href="cerrar.php" id="BotonLogin">Cerrar sesión</a></li>

				</ul>
			</div>		
		</nav>	
	</div>
	<script type="text/javascript">$(".button-collapse").sideNav();</script>
	<!-- Fin de la barra de navegacion-->


	<div class="container">
		<div class="row">
			<br>
			<br>

      <div name="tabla pedidos">
      	<table border="1px" width="100%" >
      		<tr>
      			<td>Imagen</td>
      			<td>Nombre</td>
      			<td>Precio</td>
      			<td>Cantidad</td>
      			<td>Subtotal</td>
      		</tr>
      		<?php
      			$re=mysql_query("select * from compras");
      			$numeroventa=0;
      			while ($f=mysql_fetch_array($re)) {
					if($numeroventa	!=$f['numeroventa']){
						echo '<tr><td>Compra Número: '.$f['numeroventa'].' </td></tr>';
					}
					$numeroventa=$f['numeroventa'];
					echo '<tr>
						<td><img src="../catalogo/images/'.$f['imagen'].'" width="100px" heigth="100px" /></td>
						<td>'.$f['nombre'].'</td>
						<td>'.$f['precio'].'</td>
						<td>'.$f['cantidad'].'</td>
						<td>'.$f['subtotal'].'</td>

					</tr>';
			}
      		?>

      	</table>
      </div>
    	<div  style="margin-top: 35%;">
    		<p>

      		<a class="btn-floating btn-large waves-effect waves-light red right" href="registrar.php"><i class="material-icons" >add</i></a>
      		</p>
    	</div>
		<div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large red" href="editar.php">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="txt-floating" style="color: red" >Añadir</a></li>
    </ul>
  </div>
		</div>
	</div>



</body>
</html>