/*=============================================
VALIDAR USUARIO EXISTENTE AJAX
=============================================*/

var usuarioExistente = false;
var correoExistente = false;
var cedulaExistente = false;

$("#usuarioRegistro").change(function(){

	var usuario = $("#usuarioRegistro").val();

	var datos = new FormData();
	datos.append("validarUsuario", usuario);
	
	$.ajax({
		url:"views/modules/ajax.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){
			
			if(respuesta == 0){

				$("label[for='usuarioRegistro'] span").html('<p>Este usuario ya existe en la base de datos</p>');

				usuarioExistente = true;
			}

			else{

				$("label[for='usuarioRegistro'] span").html("");
				usuarioExistente = false;

			}
		
		}

	});

});

/*=====  FIN VALIDAR USUARIO EXISTENTE AJAX  ======*/

/*=============================================
VALIDAR EMAIL EXISTENTE AJAX
=============================================*/

$("#correoRegistro").change(function(){

	var email = $("#correoRegistro").val();

	var datos = new FormData();
	datos.append("validarCorreo", email);
	
	$.ajax({
		url:"views/modules/ajax.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){
			
			if(respuesta == 0){

				$("label[for='correoRegistro'] span").html('<p>Este correo ya existe en la base de datos</p>');

				correoExistente = true;
			}

			else{

				$("label[for='correoRegistro'] span").html("");

				correoExistente = false;

			}
		
		}

	});

});

/*=============================================
VALIDAR CEDULA EXISTENTE AJAX
=============================================*/


$("#cedulaRegistro").change(function(){

	var cedula = $("#cedulaRegistro").val();

	var datos = new FormData();
	datos.append("validarCedula", cedula);
	
	$.ajax({
		url:"views/modules/ajax.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){
			
			if(respuesta == 0){

				$("label[for='usuarioRegistro'] span").html('<p>La Cedula ya se encuentra registrada</p>');

				correoExistente = true;
			}

			else{

				$("label[for='usuarioRegistro'] span").html("");

				correoExistente = false;

			}
		
		}

	});

});

/*=====  FIN VALIDAR USUARIO EXISTENTE AJAX  ======*/

/*=============================================
VALIDAR REGISTRO
=============================================*/
function validarRegistro(){

	var usuario = document.querySelector("#usuarioRegistro").value;	

	var password = document.querySelector("#contrasenaRegistro").value;

    var email = document.querySelector("#correoRegistro").value;
    
    var cedula = document.querySelector("#cedulaRegistro").value;

	

	/* VALIDAR USUARIO */

	if(usuario != ""){

		var caracteres = usuario.length;
		var expresion = /^[a-zA-Z0-9]*$/;

		if(caracteres > 10){

			document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br>Escriba por favor 10 o menos caracteres.";

			return false;
		}

		if(!expresion.test(usuario)){

			document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br>No escriba caracteres especiales.";

			return false;

		}

		if(usuarioExistente){

			document.querySelector("label[for='usuarioRegistro'] span").innerHTML = "<p>Este usuario ya existe en la base de datos</p>";

			return false;
		}

	}

	/* VALIDAR PASSWORD */

	if(password != ""){

		var caracteres = password.length;
		var expresion = /^[a-zA-Z0-9]*$/;

		if(caracteres < 6){

			document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br>Escriba por favor más de 6 caracteres.";

			return false;
		}

		if(!expresion.test(password)){

			document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br>No escriba caracteres especiales.";

			return false;

		}

	}

	/* VALIDAR EMAIL*/

	if(email != ""){

		var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

		if(!expresion.test(email)){

			document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br>Escriba correctamente el Email.";

			return false;

		}

		if(correoExistente){

			document.querySelector("label[for='usuarioRegistro'] span").innerHTML = "<p>Este correo ya existe en la base de datos</p>";

			return false;
		}

	}

/* VALIDAR CEDULA */

if(cedula != ""){

    var caracteres = cedula.length;
    var expresion = /^[0-9]/;

    if(caracteres > 8){

        document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br>Escriba por favor 8 o menos caracteres.";

        return false;
    }

    if(!expresion.test(cedula)){

        document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br>Solo puede escribir Numeros";

        return false;

    }

}

	
return true;

}
/*=====  FIN VALIDAR REGISTRO  ======*/
