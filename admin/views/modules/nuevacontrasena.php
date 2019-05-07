<div id="backIngreso">
			<form method="post" style="background-color: #29335C;" id="formIngreso" onsubmit="return validarContrasena()">

			<label style="background-color: #000;" for="alertaRegistro" ><span></span></label>
			
				<h1 id="tituloFormIngreso" style="background-color: #29335C;">INGRESE NUEVA CONTRASEÑA</h1>
				<input class="form-control formIngreso" type="password" placeholder="Nueva contraseña"  id="contrasenaRegistro" name="nuevaContrasena">
				<input class="form-control formIngreso" type="password" placeholder="Confirmar usuario"  id="confirmarRegistro" name="Usuario">

				<input style="background-color: #FAC8CD;" class="form-control formIngreso btn btn-warning" id="btn-ingreso" type="submit" value="Enviar">

				<div style="margin-top: 20px;"><a style="color: #FAC8CD;" id="forget" href="ingreso">Sé mi contraseña</a></div>
				<div style="margin-top:15px;"><a style="color: #FAC8CD;" id="forget" href="registro">¿Está registrado?</a></div>

				<?php

					$nueva = new Usuario();
					$nueva -> nuevaContrasenaController();
				?>

			</form>
</div>