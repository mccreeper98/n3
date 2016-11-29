<?php
	include 'conexion.php';
	if(!isset($_POST['nombre']) &&  !isset($_POST['descripcion']) && !isset($_POST['precio'])){
		header("Location: registrar.php");
	}else{
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))){
				//Verificamos que sea una imagen
		  	if ($_FILES["file"]["error"] > 0){
		  		//verificamos que venga algo en el input file
		    	echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
		    }else{
		    	//subimos la imagen

		    	$imagen= $random.'_'.$_FILES["file"]["name"];
		    	if(file_exists("catalogo/images/".$random.'_'.$_FILES["file"]["name"])){
		      		echo $_FILES["file"]["name"] . " Ya existe. ";
		      	}else{
		      		move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"catalogo/images/" .$random.'_'.$_FILES["file"]["name"]);
		      		echo "Archivo guardado en " . "catalogo/images/" .$random.'_'. $_FILES["file"]["name"];
		      		$producto=$_POST['nombre'];
					$descripcion=$_POST['descripcion'];
					$precio=$_POST['precio'];
					$marca=1;
					$cat=1;
					$Sql="insert into producto (desProd,preProd,idMar,idSubCat,imgProd) values(
							'".$producto."',
							'".$precio."',
							'".$marca."',
							'".$cat."',
							'".$imagen."')";
					mysql_query($Sql)or die(mysql_error());
					header ("Location: registrar.php");
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }

		
	}
?>