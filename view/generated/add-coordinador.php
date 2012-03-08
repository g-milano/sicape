<h3> Agregar Coordinador</h3>

		<form action="crud.php" id="theform" >
		<input name="view" type="hidden" value="add-Coordinador" />
	    <input name="action" type="hidden" value="newCoordinador" />
	    <fieldset>
			
			<div class="clearfix">
				<label for="cedula">Cedula: </label>
				<div class="input">
					<input class="span4" name="cedula" id="cedula" type="text" title="cedula" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="nombre">Nombre: </label>
				<div class="input">
					<input class="span4" name="nombre" id="nombre" type="text" title="nombre" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="apellido">Apellido: </label>
				<div class="input">
					<input class="span4" name="apellido" id="apellido" type="text" title="apellido" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="fecha_nac">Fecha de Nacimiento: </label>
				<div class="input">
					<input class="span4" name="fecha_nac" id="fecha_nac" type="text" title="fecha_nac" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="fecha_grado">Año de Graduación: </label>
				<div class="input">
					<input class="span4" name="fecha_grado" id="fecha_grado" type="text" title="año" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			

			<div class="clearfix">
				<label for="profesion">Profesión</label>
				<div class="input">
					<SELECT name="profesion">
						<option value=""></option>
						<?php foreach ($vars['profesiones'] as $profesion) {
						echo "<OPTION VALUE='".$profesion->idprofesion."'>".$profesion->nombre."</OPTION>";
						} ?>					
					</SELECT>
				</div>
			</div>


			<div class="clearfix">
				<label for="universidad">Egresado de:</label> 
				<div class="input">
					<SELECT name="universidad">
						<option value=""></option>
						<?php foreach ($vars['universidades'] as $universidad) {
						echo "<OPTION VALUE='".$universidad->iduniversidad."'>".$universidad->nombre."</OPTION>";
						} ?>
					</SELECT>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="horas_semanas">Horas Semanas: </label>
				<div class="input">
					<input class="span4" name="horas_semanas" id="horas_semanas" type="text" title="horas_semanas" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>

			<div class="clearfix">
				<label for="sueldo">Sueldo: </label>
				<div class="input">
					<input class="span4" name="sueldo" id="sueldo" type="text" title="sueldo" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>

			<div class="clearfix">
				<label for="telefono">Teléfono: </label>
				<div class="input">
					<input class="span4" name="telefono" id="telefono" type="text" title="telefono" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>

			<div class="clearfix">
				<label for="direccion">Dirección: </label>
				<div class="input">
					<input class="span4" name="direccion" id="direccion" type="text" title="direccion" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>

			<div class="clearfix">
				<label for="sexo">Sexo: </label>
				<div class="input">
										
					<input type=radio name="sexo" id="sexo" title="masculino" value="Masculino"/>Masculino<br>
					<input type=radio name="sexo" id="sexo" title="femenino" value="Femenino"/>Femenino<br>
					<strong class="error" id="userError"></strong>
					
				</div>
			</div>
			
			<div class="clearfix">
				<label for="email">Email: </label>
				<div class="input">
					<input class="span4" name="email" id="email" type="text" title="email" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>

	
			<div class="clearfix">
		        <label>Contraseña: </label>
				<div class="input">
			        <input class="span4" name="password" id="password" type="password" />		
				</div>
		        <strong class="error" id="passwordError"></strong>
			</div>
			
			<div class="clearfix">
		        <label>Repetir Contraseña: </label>
				<div class="input">
			        <input class="span4" name="rep_password" id="rep_password" type="password" />		
				</div>
		        <strong class="error" id="passwordError"></strong>
			</div>
	
	<input style = "margin-left: 150px;" name="" type="submit" class="btn medium blue" value="Agregar" />
	
			</form>