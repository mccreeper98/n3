function validar() {

	var nombre;
	var apellidopaterno;
	var apellidomaterno;
	var telefono;
	var correo;
	var pass;
	var pass2;
	var year;
	var dia;

	nombre = document.getElementById("nombre").value;
	apellidopaterno = document.getElementById("apellidopaterno").value;   
	apellidomaterno = document.getElementById("apellidomaterno").value;   
	telefono = document.getElementById("telefono").value;      
	correo = document.getElementById("correo").value;
	dia = document.getElementById("day").value;
	year = document.getElementById("year").value;
	pass = document.getElementById("pass").value;
	pass2 = document.getElementById("pass2").value; 	
	indice = document.getElementById("opc").selectedIndex;    

	expresion = /\w+@\w+\.+[a-z]/;

	if (nombre === "" || apellidomaterno === "" || apellidopaterno === "" || telefono === "" || correo === "" || pass === "" || dia === "" || year === "") {
		alert("Todos los campos son obligatorios");
		return false;
	}

	if (nombre <= 0 || nombre >= 0) {
		alert("El nombre no puede contener numeros");
		return false;
	}

	if (apellidopaterno <= 0 || apellidopaterno >= 0) {
		alert("El apellido paterno no puede contener numeros");
		return false;
	}

	if (apellidomaterno <= 0 || apellidomaterno >= 0) {
		alert("El apellido materno no puede contener numeros");
		return false;
	}

	if(isNaN(telefono)) {
		alert("El telefono no es numerico");
		return false;
	}
	 
	if (!expresion.test(correo)) 
	{
		alert("El correo no es correcto");
		return false;
	}


	if (pass != pass2) 
	{
		alert("Las contraseñas no son iguales");
		return false;
	}

	if (isNaN(dia)) 
	{
		alert("El dia tiene que ser numerico");
		return false;
	} 
	
	if (dia >0 && dia <=31) 
	{

	} 
	else
	{
		alert("El dia tiene que ser entre 1 o 31");
		return false;
	}

	var largodia = dia.length;

	if (largodia <= 2) 
	{
		
	}
	else
	{
		alert("El dia debe de tener el formato DD");
		return false;
	}
	

	if (isNaN(year)) 
	{
		alert("El año tiene que ser numerico");
		return false;
	}

		if (year >1900 && year <=2100) 
	{

	}
	else
	{
		alert("Selecciona una año valido");
		return false;
	}

	var largoyear = year.length;

	if (largoyear <= 4) 
	{
		
	}
	else
	{
		alert("El año debe de tener el formato YYYY");
		return false;
	}

	if( indice == null || indice == 0 ) {
		alert("Selecciona un mes");
		return false;
	}

	var largopass = pass.length;

	if (largopass <= 3) 
	{
		alert("La contraseña es muy corta");
		return false;
	}


}