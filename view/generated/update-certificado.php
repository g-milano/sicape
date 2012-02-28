
		<form action="crud.php" method="post">
			<input type="hidden" name="action" value="update" />
		<p><b>Idcertificado</b></p>
	<input type='text' name='idcertificado' value='<?php echo $vars["entity"]->idcertificado; ?>' />

<p><b>Fecha Emision</b></p>
	<input type='text' name='fecha_emision' value='<?php echo $vars["entity"]->fecha_emision; ?>' />

<p><b>Ciudad</b></p>
	<input type='text' name='ciudad' value='<?php echo $vars["entity"]->ciudad; ?>' />

<p><b>Idcurso</b></p>
	<input type='text' name='idcurso' value='<?php echo $vars["entity"]->idcurso; ?>' />

<input type="submit" name="submit" value="Save" />
		</form>