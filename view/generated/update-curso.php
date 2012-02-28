
		<form action="crud.php" method="post">
			<input type="hidden" name="action" value="update" />
		<p><b>Idcurso</b></p>
	<input type='text' name='idcurso' value='<?php echo $vars["entity"]->idcurso; ?>' />

<p><b>Nombre</b></p>
	<input type='text' name='nombre' value='<?php echo $vars["entity"]->nombre; ?>' />

<p><b>Idinstructor</b></p>
	<input type='text' name='idinstructor' value='<?php echo $vars["entity"]->idinstructor; ?>' />

<p><b>Inversion</b></p>
	<input type='text' name='inversion' value='<?php echo $vars["entity"]->inversion; ?>' />

<p><b>Contenido</b></p>
	<input type='text' name='contenido' value='<?php echo $vars["entity"]->contenido; ?>' />

<p><b>Requisitos</b></p>
	<input type='text' name='requisitos' value='<?php echo $vars["entity"]->requisitos; ?>' />

<p><b>Cupos</b></p>
	<input type='text' name='cupos' value='<?php echo $vars["entity"]->cupos; ?>' />

<p><b>Idprogramacion</b></p>
	<input type='text' name='idprogramacion' value='<?php echo $vars["entity"]->idprogramacion; ?>' />

<p><b>Status</b></p>
	<input type='text' name='status' value='<?php echo $vars["entity"]->status; ?>' />

<input type="submit" name="submit" value="Save" />
		</form>