
/*=============================================
VALIDAR INGRESO
=============================================*/
function validarIngreso(){

	var usuario = document.querySelector("#usuarioIngreso").value;	

	var password = document.querySelector("#passwordIngreso").value;
	

	/* VALIDAR USUARIO */

	if(usuario != ""){

		var caracteres = usuario.length;
		var expresion = /^[a-zA-Z0-9]*$/;

		if(caracteres > 10){

			document.querySelector("label[for='validarRegistro']").innerHTML += "<br>Escriba por favor 10 o menos caracteres.";

			return false;
		}

		if(!expresion.test(usuario)){

			document.querySelector("label[for='validarRegistro']").innerHTML += "<br>No escriba caracteres especiales.";

			return false;

		}

		
	}

	/* VALIDAR PASSWORD */

	if(password != ""){

		var caracteres = password.length;
		var expresion = /^[a-zA-Z0-9]*$/;

		if(caracteres < 6){

			document.querySelector("label[for='validarRegistro']").innerHTML += "<br>Escriba por favor más de 6 caracteres.";

			return false;
		}

		if(!expresion.test(password)){

			document.querySelector("label[for='validarRegistro']").innerHTML += "<br>No escriba caracteres especiales.";

			return false;

		}

	}

	

	
return true;

}
/*=====  FIN VALIDAR REGISTRO  ======*/
