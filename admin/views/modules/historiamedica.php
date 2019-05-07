<?php

	session_start();

	if(!$_SESSION["validar"]){

		header("location:ingreso");
		exit();

	}

	include "views/modules/botonera.php";
	include "views/modules/cabezote.php";

?>

<!--=====================================
			Animal     
			======================================-->
	<div id="editarPerfil" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

		<form method="post" onsubmit="return validarCedula()">
			<h1 style="text-align:center; margin-bottom:30px;">Historial Médico</h1>
			
			<label style="background-color: #000;" for="validarRegistro" ><span></span></label>

			<label for="">Nombre Animal</label>
			<input type="text" class="form form-control" name="animal" style="margin-bottom:20px;" placeholder="Nombre del animal">
			<label for="">Cédula Dueño</label>
			<input type="text" class="form form-control" name="cedulaD" style="margin-bottom:20px;" placeholder="Cédula del dueño" id="cedulaHistoria" >
			<label for="">Tipo de animal</label>
			<input type="text" class="form form-control" style="margin-bottom:20px;" placeholder="Tipo del animal (Ej: Perro)" name="tipoAnimal">
			<label for="">Raza</label>
			<input type="text" class="form form-control" style="margin-bottom:20px;" placeholder="Raza del animal (Ej:Pitbull)" name="raza">
			<label for="">Peso</label>
			<input type="text" class="form form-control" style="margin-bottom:20px;" placeholder="Peso (Ej: 30kg)" name="peso">
			<label for="">Fecha de Nacimiento</label>
			<input type="date" class="form form-control" style="margin-bottom:20px;" placeholder="Fecha de Nacimiento" name="fechaNacimiento">
			<label for="">Sexo</label>
			<select class="form form-control" name="sexo">
				<option value="M">Macho</option>
				<option value="H">Hembra</option>
			</select>
			<label for="" style="margin-top:20px;">Fecha de Consulta</label>
			<input type="date" class="form form-control" name="fechaConsulta" style="margin-bottom:20px;" placeholder="Fecha de Consulta">
			<label for="">Ultima visita al veterinario</label>
			<input type="date" class="form form-control" name="ultimaVisita" style="margin-bottom:20px;" placeholder="Ultima visita al veterinario (Ej: Hace dos semanas)">
			<label for="">Antecedentes</label>
			<textarea type="text" class="form form-control" name="antecedentes" style="margin-bottom:20px;" placeholder="Antecedentes (Ej: Alergico al atamel, alergias)"></textarea>
			<label for="">Síntomas que presenta</label>
			<textarea type="text" class="form form-control" name="sintomas" style="margin-bottom:20px;" placeholder="Síntomas que presenta (Ej: Fiebre, Vomitos)"></textarea>
			<label for="">Diagnostico</label>
			<textarea type="text" class="form form-control" name="diagnostico" style="margin-bottom:20px;" placeholder="Diagnostico (Ej: Gripe)"></textarea>
			<label for="">Tratamiento</label>
			<textarea type="text" class="form form-control" name="tratamiento" style="margin-bottom:20px;" placeholder="Tratamiento (Ej: Atamel por 12 horas)"></textarea>
			<input class="form-control formIngreso btn btn-warning" style="margin-top:30px;" id="btn-ingreso" type="submit" value="Registrar historia médica">

			<?php

				$historial = new historiaMedica();
				$historial -> agregarHistorial();

			?>

		</form>

</div>

                <!--segunda tabla-->
				<div id="crearPerfil" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	

				<div class="table-responsive">

				<table id="tablaSuscriptores2" class="table table-striped display" style="width: 100%;">
			    <thead>
			      <tr>
			        <th>Nombre Mascota</th>
			        <th>Cédula</th>
					<th>Ulltima Fecha Consulta</th>
					<th>Diagnostico</th>
					<th>Tratamiento</th>
			        <th></th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php 
			    		$historialMedicas = new historiaMedica();
			    		$historialMedicas -> visualizarHistorial();
			    		$historialMedicas -> borrarHistorial();
			    		$historialMedicas -> editarHistorial();
			    	?>
			    </tbody>
			  </table>

			  </div>
    		</div>

			<!--====  Fin de PERFIL  ====-->

		<!--====  Fin de COLUMNA CONTENIDO  ====-->