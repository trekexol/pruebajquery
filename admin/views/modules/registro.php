<div id="backIngreso" style="margin-top: -10%;">
			<form style="background-color: #29335C;" method="post" id="formIngreso" onsubmit="return validarRegistro()">

				<h1 id="tituloFormIngreso" style="background-color: #29335C;">REGISTRATE</h1>

				<label style="background-color: #000;" for="usuarioRegistro" ><span></span></label>
				<input class="form-control formIngreso" type="text" placeholder="Nombre" id="nombreRegistro" name="nombreRegistro" required>
				<input class="form-control formIngreso" type="text" placeholder="Apellido" id="apellidoRegistro" name="apellidoRegistro" required>
				<input class="form-control formIngreso" type="text" placeholder="Usuario" id="usuarioRegistro" name="usuarioRegistro" required>
				<input class="form-control formIngreso" type="text" placeholder="Cédula" id="cedulaRegistro" name="cedulaRegistro">
				<input class="form-control formIngreso" type="email" placeholder="Correo Electrónico" id="correoRegistro" name="correoRegistro" required>
				<input class="form-control formIngreso" type="password" placeholder="Contraseña" id="contrasenaRegistro" name="contrasenadRegistro" required>
				
				<select class="form form-control" name="preguntaSeguridad" required>
						<option value="">-Escoga pregunta de seguridad-</option>
						<option value="¿Comida Favorita?">¿Comida Favorita?</option>
						<option value="¿Deporte Favorito?">¿Deporte Favorito?</option>
						<option value="¿Serie de Televisión Favorita?">¿Serie de Televisión Favorita?</option>
						<option value="¿Familiar Querido?">¿Familiar Querido?</option>
						<option value="¿Color Favorito?">¿Color Favorito?</option>
				</select>

				<input class="form-control formIngreso" type="text" placeholder="Respuesta pregunta de seguridad" id="respuestaIngreso" name="respuestaRegistro">
				<input style="background-color: #FAC8CD;" class="form-control formIngreso btn btn-warning" id="btn-ingreso" type="submit" value="Resgistrar">
						<?php

							$registrar = new Usuario();
							$registrar -> registrarUsuario();

						?>
				<div style="margin-top: 20px;"><a style="color: #FAC8CD;" id="forget" href="ingreso">Estoy registrado</a></div>
			</form>
		</div>