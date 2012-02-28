
		<form action="crud.php" method="post">
			<input type="hidden" name="action" value="update" />
		<input type='hidden' name='idprofesion' value='<?php echo $vars["entity"]->idprofesion; ?>' />

<p><b>Nombre</b></p>
	<input type='text' name='nombre' value='<?php echo $vars["entity"]->nombre; ?>' />

<p><b>Participante Idparticipante</b></p>
	<input type='text' name='participante_idparticipante' value='<?php echo $vars["entity"]->participante_idparticipante; ?>' />

<p><b>Instructor Idinstructor</b></p>
	<input type='text' name='instructor_idinstructor' value='<?php echo $vars["entity"]->instructor_idinstructor; ?>' />

<input type="submit" name="submit" value="Save" />
		</form>