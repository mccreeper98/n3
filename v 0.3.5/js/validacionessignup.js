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
	var genero;

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
	genero = document.getElementsByName ("Genero");

	expresion = /\w+@\w+\.+[a-z]/;

	if (nombre === "" || apellidomaterno === "" || apellidopaterno === "" || telefono === "" || correo === "" || pass === "" || dia === "" || year === "") {
		sweetAlert("Oops...", "Todos los campos son obligatorios", "error");
		return false;
	}

	if (nombre <= 0 || nombre >= 0) {
		sweetAlert("Oops...", "El nombre no puede contener numeros", "error");
		return false;
	}

	if (apellidopaterno <= 0 || apellidopaterno >= 0) {

		sweetAlert("Oops...", "El apellido paterno no puede contener numeros", "error");
		return false;
	}

	if (apellidomaterno <= 0 || apellidomaterno >= 0) {

		sweetAlert("Oops...", "El apellido materno no puede contener numeros", "error");
		return false;
	}

	if(isNaN(telefono)) {

		sweetAlert("Oops...", "El telefono no es numerico", "error");
		return false;
	}

	if (!expresion.test(correo)) 
	{
		sweetAlert("Oops...", "El correo no es correcto", "error");
		return false;
	}


	if (pass != pass2) 
	{

		sweetAlert("Oops...", "Las contraseñas no son iguales", "error");

		return false;
	}

	if (isNaN(dia)) 
	{
		sweetAlert("Oops...", "El dia tiene que ser numerico", "error");
		return false;
	} 
	
	if (dia >0 && dia <=31) 
	{

	} 
	else
	{

		sweetAlert("Oops...", "El dia tiene que ser entre 1 o 31", "error");
		return false;
	}

	var largodia = dia.length;

	if (largodia <= 2) 
	{
		
	}
	else
	{
		sweetAlert("Oops...", "El dia debe de tener el formato DD", "error");
		return false;
	}
	

	if (isNaN(year)) 
	{
		sweetAlert("Oops...", "El año tiene que ser numerico", "error");
		return false;
	}

	if (year >1900 && year <=2100) 
	{

	}
	else
	{
		sweetAlert("Oops...", "Selecciona una año valido", "error");
		return false;
	}

	var largoyear = year.length;

	if (largoyear <= 4) 
	{
		
	}
	else
	{

		sweetAlert("Oops...", "El año debe de tener el formato YYYY", "error");
		return false;
	}

	if( indice == null || indice == 0 ) {
		sweetAlert("Oops...", "Selecciona un mes", "error");
		return false;
	}

	var largopass = pass.length;

	if (largopass <= 3) 
	{

		return false;
	}

	var seleccionado = false;
	for(var i=0; i<genero.length; i++) {    
		if(genero[i].checked) {
			seleccionado = true;
			break;
		}
	}

	if(!seleccionado) {
		sweetAlert("Oops...", "Ningun genero seleccionado", "error");
		return false;
	}

}