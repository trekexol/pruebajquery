/*=============================================
VALIDAR CONTRASENA
=============================================*/
function validarContrasena(){


	var password = document.querySelector("#contrasenaRegistro").value;

	/* VALIDAR PASSWORD */

	if(password != ""){

		var caracteres = password.length;
		var expresion = /^[a-zA-Z0-9]*$/;

		if(caracteres < 6){

			document.querySelector("label[for='alertaRegistro']").innerHTML += "<br>Escriba por favor más de 6 caracteres.";

			return false;
		}

		if(!expresion.test(password)){

			document.querySelector("label[for='alertaRegistro']").innerHTML += "<br>No escriba caracteres especiales.";

			return false;

		}

	}




return true;

}