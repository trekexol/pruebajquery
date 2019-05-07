<?php

require_once "../../controllers/usuario.php";
require_once "../../models/usuario.php";

class Ajax{

	public $validarUsuario;
	public $validarCorreo;

	public function validarUsuarioAjax(){

		$datos = $this->validarUsuario;

		$respuesta = MvcController::validarUsuarioController($datos); 

		echo $respuesta;

	}

	public function validarCorreoAjax(){

		$datos = $this->validarCorreo;

		$respuesta = MvcController::validarCorreoController($datos); 

		echo $respuesta;

	}

}

if(isset( $_POST["validarUsuario"])){
	
	$a = new Ajax();
	$a -> validarUsuario = $_POST["validarUsuario"];
	$a -> validarUsuarioAjax();

}

if(isset( $_POST["validarCorreo"])){

	$b = new Ajax();
	$b -> validarCorreo = $_POST["validarCorreo"];
	$b -> validarCorreoAjax();

}

