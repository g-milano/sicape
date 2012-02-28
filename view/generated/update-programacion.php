
		<form action="crud.php" method="post">
			<input type="hidden" name="action" value="update" />
		<p><b>Idprogramacion</b></p>
	<input type='text' name='idprogramacion' value='<?php echo $vars["entity"]->idprogramacion; ?>' />

<p><b>Duracion</b></p>
	<input type='text' name='duracion' value='<?php echo $vars["entity"]->duracion; ?>' />

<p><b>Fecha Inicio</b></p>
	<input type='text' name='fecha_inicio' value='<?php echo $vars["entity"]->fecha_inicio; ?>' />

<p><b>Fecha Fin</b></p>
	<input type='text' name='fecha_fin' value='<?php echo $vars["entity"]->fecha_fin; ?>' />

<p><b>Hora Inicio</b></p>
	<input type='text' name='hora_inicio' value='<?php echo $vars["entity"]->hora_inicio; ?>' />

<p><b>Hora Fin</b></p>
	<input type='text' name='hora_fin' value='<?php echo $vars["entity"]->hora_fin; ?>' />

<p><b>Aula Idaula</b></p>
	<input type='text' name='aula_idaula' value='<?php echo $vars["entity"]->aula_idaula; ?>' />

<input type="submit" name="submit" value="Save" />
		</form>