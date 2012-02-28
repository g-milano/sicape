
		<form action="crud.php" method="post">
			<input type="hidden" name="action" value="update" />
		<p><b>Idaula</b></p>
	<input type='text' name='idaula' value='<?php echo $vars["entity"]->idaula; ?>' />

<p><b>Nombre</b></p>
	<input type='text' name='nombre' value='<?php echo $vars["entity"]->nombre; ?>' />

<p><b>Capacidad</b></p>
	<input type='text' name='capacidad' value='<?php echo $vars["entity"]->capacidad; ?>' />

<input type="submit" name="submit" value="Save" />
		</form>