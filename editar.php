<?php

session_start();
include 'conexion.php';
if (isset($_SESSION['Usuario'])) {

}else{
	header("Location: index.php?Error=Acceso denegado");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Adminitrador</title>
	<link rel="shortcut icon" href="favicon.png" />
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/home.css" media="none" onload="if(media!='all')media='all'">
	<link rel="stylesheet" type="text/css" href="css/materialize.css" media="none" onload="if(media!='all')media='all'">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  src="js/jquery.js"></script>
	<script type="text/javascript"  src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/modificar.js"></script>
</head>
<body>

	<!--Inicio de la barra de navegacion-->
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<a href="#" id="Logo" class="brand-logo left">n³</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
				<ul  id="enlaces_menu" class="hide-on-med-and-down">
					<li><a href="#"><h5>Administración</h5></a></li>
					<ul id="" class="hide-on-med-and-down right">	
						<li><a href="#" id="BotonSignUp">Nombre usuario</a></li>
						<li><a href="cerrar.php" id="BotonLogin">Cerrar sesión</a></li>				
					</ul>		
				</ul>

				<ul class="side-nav" id="mobile-demo">
					<li><a href="#">Administración</a></li>
					<li><a href="#" id="BotonSignUp">Nombre usuario</a></li>
					<li><a href="#" id="BotonLogin">Cerrar sesión</a></li>

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

	<form>
        <div class="input-field">
        <h2>Editar/Borrar</h2>
          <input id="search" type="search" required placeholder="Buscar productos para Editar/Borrar">
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
      <div name="tabla pedidos">
      	<table border="1px" width="100%" >
      		<tr>
      			<td>Id</td>
      			<td>Nombre</td>
      			<td>Precio</td>
      			<td>Eliminar</td>
      			<td>Modificar</td>
      		</tr>
      		<?php
      			$resultado=mysql_query("select * from producto")or die(mysql_error());
      			while ($row=mysql_fetch_array($resultado)) {
						echo '
						<tr>
							<td>
								<input type="hidden" value="'.$row[0].'">'.$row[0].'
								<input type="hidden" class="imagen" value="'.$row[5].'">
							</td>
							<td><input type="text" class="nombre" value="'.$row[1].'"></td>
							<td><input type="text" class="precio" value="'.$row[2].'"></td>
							<td><button class="eliminar" data-id="'.$row[0].'">Eliminar</button></td>
							<td><button class="modificar" data-id="'.$row[0].'">Modificar</button></td>
						</tr>
						';
					}
			
      		?>

      	</table>
      </div>
  </div>
		</div>
	



</body>
</html>