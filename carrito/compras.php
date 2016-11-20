<?php

session_start();
include '../conexion.php';
	$arreglo=$_SESSION['carrito'];
	$numeroventa=0;
	$re=mysql_query("select * from compras order by numeroventa DESC limit 1") or die(mysql_error());
	while ($f=mysql_fetch_array($re)) {
		$numeroventa=$f['numeroventa'];
	}
	if ($numeroventa==0) {
		$numeroventa=1;
	}else{
		$numeroventa++;
	}
	for ($i=0; $i<count($arreglo); $i++) { 
		mysql_query("insert into compras (numeroventa,nombre,imagen,precio,cantidad,subtotal) values(
			".$numeroventa.",
			'".$arreglo[$i]['Imagen']."',
			'".$arreglo[$i]['Nombre']."',
			'".$arreglo[$i]['Precio']."',
			'".$arreglo[$i]['Cantidad']."',
			'".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."'
			)")or die(mysql_error());
	}
	unset($_SESSION['carrito']);
	header("Location: ../index.php");

?>