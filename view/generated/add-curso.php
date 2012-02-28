<h3>Agregar Curso</h3>
<form action="crud.php" id="theform" >
		<input name="view" type="hidden" value="signup" />
	    <input name="action" type="hidden" value="newUser" />
	    <fieldset>
			
			<div class="clearfix">
				<label for="nombre">Nombre: </label>
				<div class="input">
					<input class="span4" name="nombre" id="nombre" type="text" title="nombre" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
	
			
			<div class="clearfix">
				<label for="instructor">Instructor: </label>
				<div class="input">
					<SELECT name="instructor">
						<option value=""></option>
						<?php foreach ($vars['instructores'] as $instructor) {
						echo "<OPTION VALUE='".idinstructor."'>".$instructor->nombre."</OPTION>";
						} ?>
				
						<OPTION VALUE=""></OPTION>	
					</SELECT>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="inversion">Inversion: </label>
				<div class="input">
					<input class="span4" name="inversion" id="inversion" type="text" title="inversion" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>

			<div class="clearfix">
				<label for="contenido">Contenido: </label>
				<div class="input">
					<input class="span4" name="contenido" id="contenido" type="text" title="nombre" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>

			<div class="clearfix">
				<label for="requisitos">Requisitos: </label>
				<div class="input">
					<input class="span4" name="requisitos" id="requisitos" type="text" title="requisitos" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>
			
			<div class="clearfix">
				<label for="cupo">Cupo: </label>
				<div class="input">
					<input class="span4" name="cupo" id="cupo" type="text" title="cupo" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>

			<div class="clearfix">
				<label for="idprogramacion">Programaciones: </label>
				<div class="input">
					<input class="span4" name="idprogramacion" id="idprogramacion" type="text" title="idprogramaciones" />
					<strong class="error" id="userError"></strong>
						<table>
							<tr>
								<td></td>
								<td>Fecha Inicio</td>
								<td>Fecha Fin</td>
								<td>Hora Inicio</td>
								<td>Inicio Fin</td>
								<td>Duracion</td>
								
							</tr>
							<?php foreach ($vars['programas'] as $variable) {
								echo "<tr> <td> <input type='radio' /> </td> <td>" .$variable->fecha_inicio . "</td><td>" .$variable->fecha_fin . "</td><td>" .$variable->hora_inicio . "</td><td>" .$variable->hora_fin . "</td><td>" .$variable->duracion . "</td></tr>";
							} ?>
						</table>
						
				</div>
     		</div>
     		
     		
     		<div class="clearfix">
				<label for="status">Status del Curso: </label>
				<div class="input">
					<input class="span4" name="status" id="status" type="text" title="status" />
					<strong class="error" id="userError"></strong>
				</div>
			</div>


<input type="submit" name="submit" value="Save" />
			</form>