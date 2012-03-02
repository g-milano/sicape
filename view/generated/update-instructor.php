<h2>Modificar Intructor</h2>
	<form action="crud.php" id="theform" >
		<input name="view" type="hidden" value="update-instructor" />
	    <input name="action" type="hidden" value="update" />
	    <input name="id" type="hidden" value="<?php echo $_GET['id'];?>" />
	    <fieldset>
			
			<div class="clearfix">
				<label for="cedula">Cedula: </label>
				<div class="input">
					<input class="span4" name="cedula" id="cedula" type="text" value="<?php echo $vars['instructor'][0]->cedula;?>" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="nombre">Nombre: </label>
				<div class="input">
					<input class="span4" name="nombre" id="nombre" type="text" value="<?php echo $vars['instructor'][0]->nombre;?>" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="apellido">Apellido: </label>
				<div class="input">
					<input class="span4" name="apellido" id="apellido" type="text" value="<?php echo $vars['instructor'][0]->apellido;?>" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="fecha_nac">Fecha de Nacimiento: </label>
				<div class="input">
					<input class="span4" name="fecha_nac" id="fecha_nac" type="text" value="<?php echo $vars['instructor'][0]->fecha_nac;?>" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>	
		
			<div class="clearfix">
				<label for="fecha_grado">Año de Graduación: </label>
				<div class="input">
					<input class="span4" name="fecha_grado" id="fecha_grado" type="text" value="<?php echo $vars['instructor'][0]->fecha_grado;?>" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>

			<div class="clearfix">
				<label for="profesion">Profesion: </label>
				<div class="input">
					<SELECT name="profesion">
						<option value="">Seleccione</option>
						<?php foreach ($vars['profesiones'] as $profesion) {
							if ($profesion->idprofesion == $vars['instructor'][0]->profesion_idprofesion){
									echo "<OPTION selected VALUE='".$profesion->idprofesion."'>".$profesion->nombre."</OPTION>";
							}
							else {
								echo "<OPTION  VALUE='".$profesion->idprofesion."'>".$profesion->nombre."</OPTION>";
							}
						
						} ?>					
					</SELECT>
				</div>
			</div>
			

			<div class="clearfix">
				<label for="Universidad">Egresado de la Universidad: </label>
				<div class="input">
					<SELECT name="universidad">
						<option value="">Seleccione</option>
						<?php foreach ($vars['universidades'] as $universidad) {
						if ($universidad->iduniversidad == $vars['instructor'][0]->universidad_iduniversidad){
							echo "<OPTION selected VALUE='".$universidad->iduniversidad."'>".$universidad->nombre."</OPTION>";
						}
						else {
							echo "<OPTION  VALUE='".$universidad->iduniversidad."'>".$universidad->nombre."</OPTION>";
						}	
						} ?>
				
							
					</SELECT>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="horas_semanas">horas_semanas: </label>
				<div class="input">
					<input class="span4" name="horas_semanas" id="horas_semanas" type="text" title="horas_semanas" value="<?php echo $vars['instructor'][0]->horas_semanas;?>" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="sueldo">Sueldo </label>
				<div class="input">
					<input class="span4" name="sueldo" id="sueldo" type="text" value="<?php echo $vars['instructor'][0]->sueldo;?>" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>

			<div class="clearfix">
				<label for="telefono">Teléfono: </label>
				<div class="input">
					<input class="span4" name="telefono" id="telefono" type="text" value="<?php echo $vars['instructor'][0]->telefono;?>" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="direccion">Dirección: </label>
				<div class="input">
					<input class="span4" name="direccion" id="direccion" type="text" value="<?php echo $vars['instructor'][0]->direccion;?>" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
				<div class="clearfix">
				<label for="sexo">Sexo: </label>
				<div class="input">
					<?php if ($vars['instructor'][0]->sexo == "Masculino"){?>		
					<input CHECKED  type=radio name="sexo" id="sexo" title="masculino" value="Masculino"/>Masculino<br>
					<input type=radio name="sexo" id="sexo" title="femenino" value="Femenino"/>Femenino<br>
					<?php }else{ ?> 
					<input  type=radio name="sexo" id="sexo" title="masculino" value="Masculino"/>Masculino<br>
					<input CHECKED type=radio name="sexo" id="sexo" title="femenino" value="Femenino"/>Femenino<br>
					
					<?php } ?>
					<strong class="error" id="userError"></strong>
					
				</div>
			</div>
			

			<div class="clearfix">
				<label for="user">Email: </label>
				<div class="input">
					<input class="span4" name="email" id="email" type="text" title="Email address" value="<?php echo $vars['instructor'][0]->email;?>" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>

<input style = "margin-left: 150px;" name="" type="submit" class="btn medium blue" value="Actualizar" />
		</form>