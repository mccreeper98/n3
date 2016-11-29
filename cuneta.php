<?php

session_start();
include 'conexion.php';
?>

<?php
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$usuario=$_POST['user'];
	$password=$_POST['pass'];
	$correo=$_POST['correo'];
	$tipo=2;
	$Sql="insert into cuenta (Nombre,Apellido,Usuario,Password,Correo,tipo)
			values(
				'".$nombre."',
				'".$apellido."',
				'".$usuario."',
				'".$password."',
				'".$correo."',
				'".$tipo."')";

	mysql_query($Sql)or die(mysql_error());
	header("Location: index.php");

?>